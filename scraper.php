<?php

$assets = [
    "assets/css/styles.css",
    "assets/plugins/bootstrap/css/bootstrap.min.css",
    "assets/plugins/font-awesome/fonts/fontawesome-webfont.woff2",
    "assets/plugins/font-awesome/fonts/fontawesome-webfont.woff",
    "assets/plugins/font-awesome/fonts/fontawesome-webfont.ttf",
    "assets/plugins/animate-css/animate.min.css",
    "assets/plugins/flexslider/flexslider.css",
    "assets/plugins/font-awesome/css/font-awesome.css",
    "assets/plugins/jquery-1.12.3.min.js",
    "assets/plugins/isMobile/isMobile.min.js",
    "assets/plugins/jquery.easing.1.3.js",
    "assets/plugins/FitVids/jquery.fitvids.js",
    "assets/plugins/bootstrap/js/bootstrap.min.js",
    "assets/plugins/jquery-inview/jquery.inview.min.js",
    "assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js",
    "assets/plugins/jquery-placeholder/jquery.placeholder.js",
    "assets/plugins/flexslider/jquery.flexslider-min.js",
    "assets/plugins/jquery-match-height/jquery.matchHeight-min.js",
    "assets/js/main.js",
    "assets/js/animations.js",
    "assets/images/logo/logo.png",
    "assets/images/glow.png",
    "assets/images/iphone/iphone-slide-1.png",
    "assets/images/iphone/iphone-white.png",
    "assets/plugins/FitVids/jquery.fitvids.js",
    "assets/images/iphone/iphone-slide-2.png",
    "assets/images/iphone/iphone-slide-3.png",
    "assets/images/qrcodes/qr-1.png",
    "assets/images/patterns/pattern-1.png",
    "assets/images/bullet.png",
    "assets/images/people/people-1.png",
    "assets/images/team/member-1.png",
    "assets/images/team/member-2.png",
    "assets/images/people/people-2.png",
    "assets/images/people/people-3.png",
    "assets/images/people/people-4.png",
    "assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js",
    "assets/images/press/press-2.png",
    "assets/images/people/people-5.png",
    "assets/images/press/press-1.png",
    "assets/images/press/press-3.png",
    "assets/images/press/press-5.png",
    "assets/images/press/press-4.png",
    "assets/images/features/feature-figure-1.png",
    "assets/images/buttons/btn-app-store.png",
    "assets/images/buttons/btn-google-play.png",
    "assets/images/arrows/up-arrow-right.png",
    "assets/images/arrows/up-arrow-left.png",
    "assets/images/arrows/down-arrow-left.png",
    "assets/images/arrows/down-arrow-right.png",
    "assets/plugins/jquery-placeholder/jquery.placeholder.js",
    "assets/plugins/flexslider/jquery.flexslider-min.js",
    "assets/plugins/jquery-match-height/jquery.matchHeight-min.js",
    "assets/js/main.js",
    "assets/js/animations.js",
];

$base = "http://themes.3rdwavemedia.com/delta/1.9.2/";

foreach ($assets as $asset) {
    $filepath = $base . $asset;

    $downloaded = file_get_contents($filepath);
    $res = pathinfo("./public/$asset");
    mkdir($res['dirname'], 0777, true);
    file_put_contents("./public/$asset", $downloaded);
}