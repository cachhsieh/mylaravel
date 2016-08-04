<!DOCTYPE html>
<html lang="zh_TW">
    <head>
        <title>@yield('title')</title>
        <!-- banner -->
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <!-- fonts -->
        <link href='http://fonts.useso.com/css?family=Convergence' rel='stylesheet' type='text/css'>
        <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- //fonts -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
    </head>
    <body>
        <div class="banner">
            <div class="container">
                <div class="header-nav wow fadeInDown animated" data-wow-delay=".5s">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header logo">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1>
                                <a class="navbar-brand link link--yaku" href="index.html"><span>U</span><span>l</span><span>t</span><span>i</span><span>m</span><span>a</span><span>t</span><span>e</span></a>
                            </h1>

                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <nav class="cl-effect-1">
                                <ul class="nav navbar-nav ">
                                    <li><a class="hvr-overline-from-left button2 active" href="index.html">Home</a></li>
                                    <li><a class="hvr-overline-from-left button2" href="about.html">About</a></li>
                                    <li><a class="hvr-overline-from-left button2" href="shortcodes.html">Shortcodes</a></li>
                                    <li><a class="hvr-overline-from-left button2" href="gallery.html">Gallery</a></li>
                                    <li><a class="hvr-overline-from-left button2" href="news.html">News</a></li>
                                    <li><a class="hvr-overline-from-left button2" href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div><!-- /navbar-collapse -->
                    </nav>
                </div>
                <div class="banner-info wow fadeInLeft animated" data-wow-delay=".5s">
                    <script src="js/responsiveslides.min.js"></script>
                    <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
                    </script>
                    <div id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <div class="banner-text">
                                    <h4>Design furniture elite and modern collections</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim eaque ipsa quae ab illo inventore 
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <a href="single.html">Readmore</a>
                                </div>
                            </li>
                            <li>
                                <div class="banner-text">
                                    <h4>Creative styles and comfort gives you more flexible</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim eaque ipsa quae ab illo inventore 
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <a href="single.html">Readmore</a>
                                </div>
                            </li>
                            <li>
                                <div class="banner-text">
                                    <h4>We provide best design advice for your interior design</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim eaque ipsa quae ab illo inventore 
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <a href="single.html">Readmore</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner -->
        @yield('content')
        <div class="footer wow fadeInDown animated" data-wow-delay=".5s">
            <div class="container">
                <p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
            </div>
        </div>
        <!-- //contact -->
        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
    </body>
</html>