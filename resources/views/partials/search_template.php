<script id="search_suggestion_template" type="text/template">
    <div class="autocomplete-wrapper">
        {{#_highlightResult.h1}}
        <div class="h1">
            {{{ _highlightResult.h1.value }}}
        </div>
        {{/_highlightResult.h1}}

        {{#_highlightResult.content}}
        <div class="content">
            <img width="100" src="{{{ _highlightResult.img.value }}}" alt="">
            {{{ _highlightResult.content.value }}}
        </div>
        {{/_highlightResult.content}}
    </div>
</script>

<script id="search_empty_template" type="text/template">
    <div class="autocomplete-wrapper empty">
        <div class="h2">We didn't find any result for "{{query}}". Sorry!</div>
    </div>
</script>

<script id="search_footer_template" type="text/template">
    <div class="footer">
        <a target="_blank" href="http://www.algolia.com/?utm_source=lavarel&utm_medium=link&utm_campaign=lavarel_documentation_search">
            <div class="powered">powered by TNTSearch</div>
            <div style="clear: both"></div>
        </a>
    </div>
</script>