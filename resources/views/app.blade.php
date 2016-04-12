<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A showcase for TNTSearch engine">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>TNT Search</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue-pink.min.css" />
    <link rel="stylesheet" href="/css/styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body id="app">
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout">
      <header class="demo-header mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">TNTSearch</span>
          <nav class="mdl-navigation mdl-layout--large-screen-only">
              <a class="mdl-navigation__link is-active" href="#">About</a>
              <a class="mdl-navigation__link" href="#">FAQ</a>
          </nav>
          <div class="devsite-search-wrapper">
              <form class="devsite-search-form" id="top-search">
                  <div id="searchbox" class="devsite-searchbox">
                      <input v-model="searchInput" v-on:input="search" placeholder="Search for your favorite TV Show" type="text" class="devsite-search-field devsite-search-query" name="q" autocomplete="off">
                      <div class="devsite-search-image material-icons"></div>
                  </div>
              </form>
          </div>
        </div>
      </header>
      <div class="demo-ribbon banner"></div>

      <main class="demo-main mdl-layout__content mdl-demo">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white content  mdl-cell mdl-cell--8-col">
            @yield('content')
          </div>
        </div>
        <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <ul class="mdl-mini-footer--link-list">
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
              <li><a href="#">User Agreement</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <a href="https://github.com/teamtnt/tntsearch" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>
    <script src="{{ elixir('assets/js/app.js') }}"></script>
    <script>
        new Vue({
          el: '#app',
          data: {
            shows: []
          },
          methods: {
              search: function () {
                var that = this;
                $.post('/search',{query: this.searchInput}, function(res) {
                    that.shows = res.hits;
                });
              }
            }
        })
    </script>
  </body>
</html>