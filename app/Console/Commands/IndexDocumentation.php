<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use TeamTNT\TNTSearch;
use Config;
use Goutte\Client;

class IndexDocumentation extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'docs:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index all documentation with TNTSearch';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->scrapePHPUnitDe();

        $tnt = new TNTSearch;

        $config = [
            "storage"   => storage_path(),
            "driver"    => 'filesystem',
            "location"  => base_path('resources/docs/'),
            "extension" => "html",
            "exclude"   => ['index.html']
        ];

        $tnt->loadConfig($config);
        $indexer = $tnt->createIndex('docs');
        $indexer->run();
    }

    public function scrapePHPUnitDe()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://phpunit.de/manual/current/en/index.html');
        $toc = $crawler->filter('.toc');
        file_put_contents(base_path('resources/docs/').'index.html', $toc->html());
        
        $crawler->filter('.toc > dt a')->each(function($node) use ($client) {
            $href = $node->attr('href');
            $this->info("Scraped: " . $href);
            $crawler = $client->request('GET', $href);
            $chapter = $crawler->filter('.col-md-8 .chapter, .col-md-8 .appendix')->html();
            file_put_contents(base_path('resources/docs/').$href, $chapter);
        });
    }
}
