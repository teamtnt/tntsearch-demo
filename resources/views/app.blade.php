
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>TNTSearch - A fully featured full text search engine written in PHP</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>  
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/animate-css/animate.min.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body data-spy="scroll">
    <!-- ******HEADER****** --> 
    <header id="top" class="header navbar-fixed-top">  
        <div class="container">            
            <h1 class="logo pull-left">
                <a class="scrollto" href="#promo">
                    <img id="logo-image" class="logo-image" src="assets/images/logo/tntsearch-logo.png" alt="Logo">
                    <span class="logo-title">TNTSearch</span>
                </a>
            </h1><!--//logo-->              
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>
                        <li class="nav-item"><a class="scrollto" href="#features">Features</a></li>
                        <li class="nav-item"><a class="scrollto" href="#how">Showcase</a></li>
                        <li class="nav-item"><a class="scrollto" href="#pricing">Docs</a></li>
                        <li class="nav-item last"><a class="scrollto" href="#contact">Github</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->           
        </div>
    </header><!--//header-->
    
    <!-- ******PROMO****** --> 
    <section id="promo" class="promo section offset-header has-pattern">
        <div class="container">
            <div class="row">
                <div class="overview col-md-8 col-sm-12 col-xs-12">
                    <h2 class="title">A fully featured full text search engine written in PHP</h2>
                    <ul class="summary">
                        <li>Zero configuration without any dependencies</li>
                        <li>Fast and relevant results</li>
                        <li>Works on all platforms</li>
                        <li>Developer friendly and framework agnostic</li>
                    </ul>
                    <div class="download-area">
                        <ul class="btn-group list-inline">
                            <li class="ios-btn"><a href="#" onclick="ga('send', 'event', 'wordpress-button', 'click');">Available for Wordpress</a></li>
                            <li class="android-btn"><a href="#" onclick="ga('send', 'event', 'magento-button', 'click');">Available for Magento</a></li>
                        </ul>
                        <div class="note text-center">
                            <p>30% OFF - Now only $39<br />Offer valid for pre-orders</p>
                            <span class="left-arrow"></span>
                            <span class="right-arrow"></span>
                        </div><!--//note-->
                    </div>
                </div><!--//overview-->
                
                <!--// iPhone starts -->
                <div class="search-image text-center col-md-4 col-sm-12 col-xs-12 ">
                    <img src="/assets/images/search.png" class="img-responsive" alt="TNT Search Cloud">                 
                </div><!--//iphone-->  
                <!--// iPhone ends -->
                                           
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//promo-->
    
    <!-- ******FEATURES****** --> 
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <h2 class="title text-center sr-only">Features</h2>
                <div class="item col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="icon">
                        <i class="fa fa-cloud-upload"></i>                
                    </div><!--//icon-->
                    <div class="content">
                        <h3 class="title">App Feature One</h3>
                        <p>Outline an app feature/benefit here. You can change the icon above to any of the 500+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. </p>  
                        <button class="modal-trigger btn btn-link" data-toggle="modal" data-target="#feature-modal-1">Find out more</button>
                    </div><!--//content-->               
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="icon">
                        <i class="fa fa-rocket"></i>                
                    </div><!--//icon-->
                    <div class="content">
                        <h3 class="title">App Feature Two</h3>
                        <p>Outline an app feature/benefit here. You can change the icon above to any of the 500+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. </p>   
                        <button class="modal-trigger btn btn-link" data-toggle="modal" data-target="#feature-modal-1">Find out more</button>
                    </div><!--//content-->               
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="icon">
                        <i class="fa fa-users"></i>                
                    </div><!--//icon-->
                    <div class="content">
                        <h3 class="title">App Feature Three</h3>
                        <p>Outline an app feature/benefit here. You can change the icon above to any of the 500+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. </p> 
                        <button class="modal-trigger btn btn-link" data-toggle="modal" data-target="#feature-modal-1">Find out more</button>  
                    </div><!--//content-->               
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>                
                    </div><!--//icon-->
                    <div class="content">
                        <h3 class="title">App Feature Four</h3>
                        <p>Outline an app feature/benefit here. You can change the icon above to any of the 500+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. </p>   
                        <button class="modal-trigger btn btn-link" data-toggle="modal" data-target="#feature-modal-1">Find out more</button>
                    </div><!--//content-->               
                </div><!--//item-->
            </div><!--//row-->
            
            <div class="row feature-row-last">
                <div class="item col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="icon">
                        <i class="fa fa-calendar"></i>                
                    </div><!--//icon-->
                    <div class="content">
                        <h3 class="title">App Feature One</h3>
                        <p>Outline an app feature/benefit here. You can change the icon above to any of the 500+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. </p>  
                        <button class="modal-trigger btn btn-link" data-toggle="modal" data-target="#feature-modal-1">Find out more</button>
                    </div><!--//content-->               
                </div><!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="icon">
                        <i class="fa fa-comments"></i>                
                    </div><!--//icon-->
                    <div class="content">
                        <h3 class="title">App Feature Two</h3>
                        <p>Outline an app feature/benefit. You can change the icon above to any of the 500+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. </p>  
                        <button class="modal-trigger btn btn-link" data-toggle="modal" data-target="#feature-modal-1">Find out more</button>
                    </div><!--//content-->               
                </div><!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="icon">
                        <i class="fa fa-globe"></i>
                    </div><!--//icon-->
                    <div class="content">
                        <h3 class="title">App Feature Three</h3>
                        <p>Outline an app feature/benefit here. You can change the icon above to any of the 500+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome icons</a> available. </p> 
                        <button class="modal-trigger btn btn-link" data-toggle="modal" data-target="#feature-modal-1">Find out more</button>  
                    </div><!--//content-->               
                </div><!--//item-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//features-->
    
    <!-- ******HOW****** --> 
    <section id="how" class="how section has-pattern">
        <div class="container">
            <div class="row">
                <div class="content col-md-6 col-sm-6 col-xs-12 text-center">
                    <h2 class="title">Try it out</h2>
                    <p class="intro">Let us show you the powerfull search capabilities of the engine. The indexed database consists of <a href="#">57000</a> shows and <a href="#">130000</a> actors.</p>
                    <div class="qr-codes hidden-sm hidden-xs">
                        <div class="note">
                            <p>Search for your favorite TV Show</p>
                            <span class="left-arrow"></span>
                            <span class="right-arrow"></span>
                        </div><!--//note-->
                        <div class="row">
                            <div class="item col-md-12 col-sm-6">
                                <input v-model="searchInput" v-on:input="search" type="text" class="form-control">
                            </div><!--//item-->
                        </div>                    
                    </div><!--//qr-codes-->
                </div><!--//content-->
                <div class="content col-md-6 col-sm-6 col-xs-12 text-center">
{{--                     <div  v-for="show in shows">
                        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                            <header>
                              <img class="cover" width="155" v-bind:src="show.img" alt="">
                            </header>
                            <div class="mdl-card mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                              <div class="mdl-card__supporting-text">
                                <h4>@{{ show.title }}</h4>
                                <p><img src="/images/pg.png" alt=""> @{{show.runtime}} min   -   @{{show.genre}}</p>
                                <p class="uk-text-justify">@{{show.content}}</p>
                                <p><b>Stars:</b> @{{show.actors}}</p>
                              </div>
                              <div class="mdl-card__actions">
                                <a target="_blank" class="mdl-button" href="@{{show.link}}">View on IMDB</a>
                              </div>
                            </div>
                        </section>
                        <br>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-4" v-for="show in shows">
                            <img class="cover img-responsive" v-bind:src="show.img" alt="">
                        </div>
                    </div>
                </div>
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//how-->
    
    <!-- ******TESTIMONIALS****** --> 
    <section id="testimonials" class="testimonials section">
        <div class="container">
            <div class="row">
                <h2 class="title text-center">What do people think?</h2>
                <div class="item col-md-4 col-sm-4">
                    <div class="quote-box">
                        <i class="fa fa-quote-left"></i>
                        <blockquote class="quote">
                            <a href="#">@Delta</a> I love this #app. Lorem ipsum dolor sit amet, consectetur adipiscing elit. #Mobile
                        </blockquote><!--//quote-->
                    </div><!--//quote-box-->
                    <div class="people row">
                        <img class="img-rounded user-pic col-md-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1" src="assets/images/people/people-1.png" alt="" />
                        <p class="details text-center pull-left">
                            <span class="name">Christine Heal</span>
                            <span class="title">Bristol, UK</span>
                        </p>                        
                    </div><!--//people-->
                </div><!--//item-->
                <div class="item col-md-4 col-sm-4">
                    <div class="quote-box">
                        <i class="fa fa-quote-left"></i>
                        <blockquote class="quote">
                            <a href="#">@Delta</a> consectetur adipiscing elit. #DeltaApp Sed bibendum velit quis nunc laoreet dictum id nisl id lacinia. 
                        </blockquote><!--//quote-->
                    </div><!--//quote-box-->
                    <div class="people row">
                        <img class="img-rounded user-pic col-md-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1" src="assets/images/people/people-2.png" alt="" />
                        <p class="details text-center pull-left">
                            <span class="name">Ben Rousseau</span>
                            <span class="title">Paris, France</span>
                        </p>                        
                    </div><!--//people-->
                </div><!--//item-->
                <div class="item col-md-4 col-sm-4">
                    <div class="quote-box">
                        <i class="fa fa-quote-left"></i>
                        <blockquote class="quote">
                        I find DeltaApp very useful - Lorem ipsum dolor sit amet, check it out: <a href="#">http://bit.ly/1gB9UBR</a>
                        </blockquote><!--//quote-->
                    </div><!--//quote-box-->
                    <div class="people row">
                        <img class="img-rounded user-pic col-md-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1" src="assets/images/people/people-3.png" alt="" />
                        <p class="details text-center pull-left">
                            <span class="name">Mike Chan</span>
                            <span class="title">Hongkong, China</span>
                        </p>                        
                    </div><!--//people-->
                </div><!--//item-->
            </div><!--//row-->
            <div class="row">
                <div class="item col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2">
                    <div class="quote-box">
                        <i class="fa fa-quote-left"></i>
                        <blockquote class="quote">
                         DeltaApp is fab lorem ipsum dolor sit amet proin sagittis sodales pulvinar Mauris id arcu eget augue condimentum euismod: <a href="#">http://bit.ly/1gB9UBR</a>
                        </blockquote><!--//quote-->
                    </div><!--//quote-box-->
                    <div class="people row">
                        <img class="img-rounded user-pic col-md-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1" src="assets/images/people/people-4.png" alt="" />
                        <p class="details text-center pull-left">
                            <span class="name">Annie Lee</span>
                            <span class="title">Berlin, Germany</span>
                        </p>                        
                    </div><!--//people-->
                </div><!--//item-->
                <div class="item col-md-4 col-sm-4">
                    <div class="quote-box">
                        <i class="fa fa-quote-left"></i>
                        <blockquote class="quote">
                        DeltaApp is a great dolor sit amet proin sagittis sodales pulvinar vestibulum porta dolor molestie semper.: <a href="#">http://bit.ly/1gB9UBR</a>
                        </blockquote><!--//quote-->
                    </div><!--//quote-box-->
                    <div class="people row">
                        <img class="img-rounded user-pic col-md-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1" src="assets/images/people/people-5.png" alt="" />
                        <p class="details text-center pull-left">
                            <span class="name">Adam Gordon</span>
                            <span class="title">London, UK</span>
                        </p>                        
                    </div><!--//people-->
                </div><!--//item-->
            </div>
            <div class="press row text-center">
                <h3 class="note">TNTSearch is used by:</h3>
                <ul class="col-md-12 list-inline">
                    <li><a href="http://canvas.toddaustin.io/"><img class="img-responsive usedby" src="assets/images/usedby/canvas.gif" alt="" /></a></li>
                    <li><a href="https://pyrocms.com/"><img class="img-responsive usedby" src="assets/images/usedby/pyro.png" alt="" /></a></li>
                    <li><a href="https://www.primeros.de/"><img class="img-responsive usedby" src="assets/images/usedby/primeros.png" alt="" /></a></li>
                    <li class="last"><a href="https://www.luxify.com/"><img class="img-responsive usedby" src="assets/images/usedby/luxify.png" alt="" /></a></li>
                </ul>
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//Testimonials-->
    
    <!-- ******CONTACT****** --> 
    <section id="contact" class="contact section has-pattern">
        <div class="container">
            <div class="row text-center">
                <h2 class="title">Contact US</h2>
                <div class="intro col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                    <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend.</p>
                    <ul class="list-unstyled contact-details">
                        <li><i class="fa fa-envelope"></i><a href="mailto:hello@website.com">hello@website.com</a></li>
                        <li><i class="fa fa-phone-square"></i>0800 123 456</li>
                    </ul>
                </div>
            </div><!--//row-->
            <div class="text-center">
                 <ul class="social-icons list-inline">
                    <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>                  
                </ul><!--//social-icons-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//contact-->  
      
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container">
            <small class="copyright pull-left">Copyright &copy; 2016 <a href="http://tnt.studio" target="_blank">TNT Studio</a></small>
            <ul class="links list-inline">
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
    </footer><!--//footer-->

    <!-- Feature Modal -->
    <div class="modal modal-feature" id="feature-modal-1" tabindex="-1" role="dialog" aria-labelledby="featureModalLabel-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="featureModalLabel-1" class="modal-title text-center">App Feature and Benefit</h4>
                </div>
                <div class="modal-body"> 
                    <div class="row">    
                        <figure class="figure col-md-6 col-sm-12 col-xs-12">
                            <img class="img-responsive img-rounded" src="assets/images/features/feature-figure-1.png" alt="" />
                            <figcaption class="caption">Figure caption goes here </figcaption>
                        </figure> 
                        <div class="content col-md-6 col-sm-12 col-xs-12">           
                            <p>You can use the modal to explain one of your app's features/benefits in details. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                            <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. </p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-star"></i>Lorem ipsum dolor sit ame</li>
                                <li><i class="fa fa-star"></i>Curabitur elit elit</li>
                                <li><i class="fa fa-star"></i>Nunc tincidunt ipsum a risus</li>
                            </ul>
                            <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                            <blockquote class="quote">
                                <p><i class="fa fa-quote-left"></i>I love this magna pellentesque in magnis gravida sit augue felis vehicula vestibulum semper penatibus justo ornare semper Gravida felis platea arcu mus non. Montes at posuere. Natoque.</p>
                                <p class="people"><span class="name">Adam Lee</span><br><span class="title">Developer, AppHunt</span></p>
                            </blockquote>
                        </div><!--//content-->
                    </div><!--//row-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    <!-- Javascript -->          

    <script type="text/javascript" src="/js/app.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-39834309-3', 'auto');
      ga('send', 'pageview');

    </script>
       
</body>
</html> 