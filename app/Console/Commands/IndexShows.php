<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use TeamTNT\TNTSearch\TNTSearch;

class IndexShows extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tvshows:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index all TV Shows with TNTSearch';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $tnt = new TNTSearch;

        $config = [
            'driver'    => 'sqlite',
            'database'  => base_path().'/database/database.sqlite',
            'storage'   => storage_path()
        ];

        $tnt->loadConfig($config);
        
        $indexer = $tnt->createIndex('tvdb.index');
        $indexer->query('select id, series_name, genre, actors from tvseries;');

        $indexer->run();
        echo "real: ".(memory_get_peak_usage(true)/1024/1024)." MiB\n\n";
    }
}