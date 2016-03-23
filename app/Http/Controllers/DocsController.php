<?php namespace App\Http\Controllers;

use App\Documentation;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Request;
use TeamTNT\TNTSearch;

class DocsController extends Controller {

    /**
     * The documentation repository.
     *
     * @var Documentation
     */
    protected $docs;

    /**
     * Create a new controller instance.
     *
     * @param  Documentation  $docs
     * @return void
     */
    public function __construct(Documentation $docs, TNTSearch $tnt)
    {
        $this->docs = $docs;
        $this->tnt  = $tnt;
    }

    /**
     * Show a documentation page.
     *
     * @return Response
     */
    public function show($page = null)
    {
        $page = str_replace(".html", "", $page);
        $content = $this->docs->get($page ?: 'installation');
        
        if (is_null($content)) {
            abort(404);
        }

        $title = (new Crawler($content))->filterXPath('//h1');

        return view('docs', [
            'title' => count($title) ? $title->text() : null,
            'index' => $this->docs->getIndex(),
            'content' => $content,
        ]);
    }

    public function search(Request $request)
    {
        $this->tnt->loadConfig([
            "storage"   => storage_path(),
            "driver"    => 'filesystem',
        ]);

        $this->tnt->selectIndex("docs");
        $this->tnt->asYouType = true;

        $results = $this->tnt->search($request->get('query'), $request->get('params')['hitsPerPage']);

        return $this->processResults($results, $request);
    }

    public function processResults($res, $request)
    {
        $data = ['hits' => [], 'nbHits' => count($res)];

        foreach ($res as $result) {
            $file = file_get_contents($result['path']);
            $crawler = new Crawler;
            $crawler->addHtmlContent($file);
            $title = $crawler->filter('h1')->text();

            $relevant = $this->tnt->snippet($request->get('query'), strip_tags($file));

            $data['hits'][] = [
                'link' => basename($result['path']),
                '_highlightResult' => [
                    'h1' => [
                        'value' => $this->tnt->highlight($title, $request->get('query')),
                    ],
                    'content' => [
                        'value' => $this->tnt->highlight($relevant, $request->get('query')),
                    ]
                ]
            ];
        }

        return response()->json($data);
    }

}