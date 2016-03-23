<!DOCTYPE html>
<html>
    <head>
        <title>PHPUnit Documentation</title>
        <link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}">
    </head>

    <body class="tm-background">

        <nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">

                <a class="uk-navbar-brand uk-hidden-small" href="/">PHPUnit</a>

                <ul class="uk-navbar-nav uk-navbar-flip uk-hidden-small">
                    <li class="uk-active"><a href="/">Documentation</a></li>
                </ul>

                <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
            </div>
        </nav>

        <div class="tm-middle">
            <div class="uk-container uk-container-center">

                <div class="uk-grid" data-uk-grid-margin>
                    <div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small uk-list">
                        @yield('index')
                    </div>
                    <div class="tm-main uk-width-medium-3-4">

                        <input id="search-input" class="tnt-search-field" type="search" placeholder="Search the docs ...">
                        <article class="uk-article">
                            <br><br>
                            @yield('content')
                        </article>

                    </div>
                </div>

            </div>
        </div>

        <div class="tm-footer">
            <div class="uk-container uk-container-center uk-text-center">

                <ul class="uk-subnav uk-subnav-line uk-flex-center">
                    <li><a href="https://github.com/teamtnt/tntserach">GitHub</a></li>
                    <li><a href="https://twitter.com/tntstudiohr">Twitter</a></li>
                </ul>

                <div class="uk-panel">
                    <p>Made by <a href="http://www.tnt.studio">TNT Studio</a> with love and caffeine.</p>
                </div>

            </div>
        </div>
        @include('partials.search_template')
        <script src="{{ elixir('assets/js/app.js') }}"></script>
        <script type="text/javascript">
          $(document).ready(function() { $('pre.programlisting').each(function(i, e) {hljs.highlightBlock(e)}); });
        </script>
    </body>
</html>
