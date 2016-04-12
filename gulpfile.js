var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'public/assets/css');
    mix.scripts(
    [   'jquery.js', 
        'vue.min.js'],
        'public/assets/js/app.js',
        'resources/assets/js/');
    mix.version(['assets/css/app.css', 'assets/js/app.js']);
});
