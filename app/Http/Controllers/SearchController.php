<?php namespace App\Http\Controllers;

use App\Documentation;
use App\TvSerie;
use App\Query;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use TeamTNT\TNTSearch\TNTSearch;
use App\QueryExpansion;
use App\Http\Requests;

class SearchController extends Controller
{

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
    public function __construct(TNTSearch $tnt)
    {
        $this->tnt  = $tnt;
    }

    public function search(Request $request)
    {
        $this->tnt->loadConfig([
            "storage" => storage_path(),
        ]);

        $this->tnt->selectIndex("tvdb.index");
        $this->tnt->asYouType = true;

        try {
            if($request->get('query'))
            Query::insert([
                'query' => $request->get('query'),
                'hits'  => 1
            ]);
        } catch (\Exception $e) {
            $q = Query::where('query', $request->get('query'))->first();
            $q->hits = $q->hits + 1;
            $q->save();
        }

        $query = QueryExpansion::expand($request->get('query'));

        $results = $this->tnt->search(strtolower($query), 6);

        return $this->processResults($results, $request);
    }

    public function processResults($res, $request)
    {
        $data = ['hits' => [], 'time' => $res['execution time']];

        if (count($res['ids']) == 0) {
            return response()->json($data);
        }
        $order = "";
        foreach ($res['ids'] as $index => $id) {
            $order .= "WHEN $id THEN $index ";
        }

        $series = TvSerie::whereIn('id', $res['ids'])
            ->orderByRaw("CASE id $order END")
            ->get();

        foreach ($series as $serie) {

            $title    = $serie->series_name;
            $relevant = $serie->overview;
            $actors   = trim(str_replace("|", ', ', $serie->actors), ', ');
            $genre    = trim(str_replace("|", ', ', $serie->genre), ', ');
            if ($serie->image == 'noimage' || $serie->image == "" || !$serie->image) {
                $serie->image = '/assets/images/no_poster.png';
            }

            $data['hits'][] = [
                'link'    => "http://www.imdb.com/title/" . $serie->imdb_id,
                'title'   => $this->tnt->highlight($title, $request->get('query'), 'em', ['wholeWord' => false]),
                'img'     => $serie->image,
                'content' => $serie->overview,
                'genre'   => $genre,
                'actors'  => $this->tnt->highlight($actors, $request->get('query')),
                'runtime' => $serie->runtime,
            ];
        }

        return response()->json($data);
    }

    public function queries()
    {
        $queries = Query::orderBy('hits', 'DESC')->limit(1000)->get();
        return view('queries', compact('queries'));
    }

}