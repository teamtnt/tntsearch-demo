<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use TeamTNT\TNTSearch\TNTSearch;
use Config;
use Goutte\Client;

class IndexDocumentation extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'tvshows:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index all TV Shows with TNTSearch';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $tnt = new TNTSearch;

        $config = [
            'driver'    => 'sqlite',
            'database'  => base_path().'/database/seeds/tvdb.sqlite',
            'username'  => '',
            'password'  => '',
            'storage'   => storage_path()
        ];

        $tnt->loadConfig($config);
        
        $indexer = $tnt->createIndex('tvdb.index');
        $indexer->query('select id, series_name, genre, actors from tvseries;');

        $indexer->run();
        echo "real: ".(memory_get_peak_usage(true)/1024/1024)." MiB\n\n";
    }

}
