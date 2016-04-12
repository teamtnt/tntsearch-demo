<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use TeamTNT\TNTSearch;
use Config;
use Goutte\Client;
use App\TvSerie;

class GetImageLink extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'get:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Images';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $series = TvSerie::whereNotNull('IMDB_ID')
                    ->whereNull('image')->get();

        foreach ($series as $serie) {
            
            $imdbID = $serie->IMDB_ID;
            $imdbID = str_replace('/?ref_=fn_al_tt_', '', $imdbID);
            $imdbID = trim($imdbID, '/');
            $this->info($imdbID);
            $imdbID = urlencode($imdbID);
            $res = file_get_contents("https://api.themoviedb.org/3/find/$imdbID?api_key=9fad3e56789c8ff7e9d795e19fbdee26&external_source=imdb_id");
            $json = json_decode($res);
            $src = null;
            if(isset($json->tv_results[0])) {
                $src = $json->tv_results[0]->poster_path;
            }
            if($src) {
                $link = "http://image.tmdb.org/t/p/w154".$src;
                $this->info($link);
                $serie->image = $link;
            } else {
                $serie->image = "noimage";
            }
            $serie->timestamps = false;
            $serie->save();
        }

    }

}
