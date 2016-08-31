
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

const app = new Vue({
  el: '#how',
  data: {
    searchInput: "",
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
});


jQuery(document).ready(function($) {

    /* ======= Scrollspy ======= */
    $('body').scrollspy({ target: '#top', offset: 400});
   
    /* ======= ScrollTo ======= */
    $('a.scrollto').on('click', function(e){
        
        //store hash
        var target = this.hash;
                
        e.preventDefault();
        
        $('body').scrollTo(target, 800, {offset: -80, 'axis':'y', easing:'easeOutQuad'});
        //Collapse mobile menu after clicking
        if ($('.navbar-collapse').hasClass('in')){
            $('.navbar-collapse').removeClass('in').addClass('collapse');
        }
        
    });
    
    /* ======= Flexslider ======= */
    $('.flexslider').flexslider({
        animation: "fade",
        touch: true,
        directionNav: false
    });

    $('#testimonials .quote-box').matchHeight(); 

});