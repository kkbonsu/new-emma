<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>About Wagyingo Hostel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header">
            
            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span><i class="lotus-icon-location"></i> 225 Beach Street, Australian</span>
                        <span><i class="lotus-icon-phone"></i> 1-548-854-8898</span>
                    </div>
                    <div class="header_right float-right">
                        <span class="socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </span>
                        <div class="dropdown currency">
                            <span>GH&#x20B5;<i class="fa fa"></i> </span>
                        </div>
                        <div class="dropdown currency">
                            <a href="#"><span>{{ Auth::user()->name }}</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->
            
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="#"><img src="images/wagyingo_logo.jpg" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li>
                                <a href="/index-homepage">Home</a>
                            </li>
                            <li class="current-menu-item">
                                <a href="/about">About</a>
                            </li>
                            <li>
                                <a href="#">Rooms <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="/single">Single</a></li>
                                    <li><a href="/double">Double</a></li>
                                    <li><a href="/quad">Quad</a></li>
                                    <li><a href="/basement2in2">Basement 2 in 2</a></li>
                                    <li><a href="/basementdouble">Basement Double</a></li>
                                    <li><a href="/basementquad">Basement Quad</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/gallery">Gallery </a>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->

                   <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->
        
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>ABOUT WAGYINGO HOSTEL</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->
        
        <!-- ABOUT -->
        <section class="section-about">
            <div class="container">

                <div class="about">

                    <!-- ITEM -->
                    <div class="about-item">

                        <div class="img owl-single">
                            <img src="images/about/img-1.jpg" alt="">
                            <img src="images/about/img-1.jpg" alt="">
                        </div>

                        <div class="text">
                            <h2 class="heading">ABOUT lotus</h2>
                            <div class="desc">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <b>The point of using Lorem Ipsum is that it has a more-or-less normal</b> distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing<br> packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p><br>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>

                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="about-item about-right">

                        <div class="img">
                            <img src="images/about/img-1.jpg" alt="">
                        </div>

                        <div class="text">
                            <h2 class="heading">WHY GUEST CHOOSE lotus HOTEL?</h2>
                            <div class="desc">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, <b>sometimes by accident, sometimes on purpose</b> (injected humour and the like).</p>
                            </div>
                        </div>

                    </div>
                    <!-- END / ITEM -->

                </div>

            </div>
        </section>
        <!-- END / ABOUT -->
        
        <!-- HOTEL STATISTICS -->
        <section class="section-statistics bg-10">
            
            <div class="awe-overlay"></div>

            <div class="container">
                <div class="statistics">
                
                    <h2 class="heading white text-center">HoStel statistics</h2>
                
                    <div class="statistics_content">
                        <div class="row">
                
                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="statistics_item">
                                    <span class="count">768</span>
                                    <span>Guest Stay</span>
                                </div>
                            </div>
                            <!-- END ITEM -->
                
                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="statistics_item">
                                    <span class="count">632</span>
                                    <span>BOOK ROOM</span>
                                </div>
                            </div>
                            <!-- END ITEM -->
                
                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="statistics_item">
                                    <span class="count">1024</span>
                                    <span>MEMBER STAY</span>
                                </div>
                            </div>
                            <!-- END ITEM -->
                
                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="statistics_item">
                                    <span class="count">256</span>
                                    <span>MEALS SERVED</span>
                                </div>
                            </div>
                            <!-- END ITEM -->
                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / HOTEL STATISTICS -->

        <!-- TEAM -->
        <section class="section-team">
            <div class="container">

                <div class="team">
                    <h2 class="heading text-center">Team Member</h2>
                    <p class="sub-heading text-center">Lorem Ipsum is simply dummy text of the printing</p>
                    
                    <div class="team_content">
                        <div class="row">

                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="team_item text-center">

                                    <div class="img">
                                        <a href=""><img src="images/team/img-1.jpg" alt=""></a>
                                    </div> 

                                    <div class="text">
                                        <h2>JESSICA ALBA</h2>
                                        <span>Hostel Owner</span>
                                        <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                        <div class="team-share">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="team_item text-center">

                                    <div class="img">
                                        <a href=""><img src="images/team/img-1.jpg" alt=""></a>
                                    </div> 

                                    <div class="text">
                                        <h2>Robet WILIAM</h2>
                                        <span>Hostel Manager</span>
                                        <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                        <div class="team-share">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="team_item text-center">

                                    <div class="img">
                                        <a href=""><img src="images/team/img-1.jpg" alt=""></a>
                                    </div> 

                                    <div class="text">
                                        <h2>Adam</h2>
                                        <span>Hostel Porter</span>
                                        <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                        <div class="team-share">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="team_item text-center">

                                    <div class="img">
                                        <a href=""><img src="images/team/img-1.jpg" alt=""></a>
                                    </div> 

                                    <div class="text">
                                        <h2>David Gari</h2>
                                        <span>Hostel Accountant</span>
                                        <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                        <div class="team-share">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- END / ITEM -->

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / TEAM -->

        <!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER TOP -->
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        
                        <!-- WIDGET SOCIAL -->
                        <div class="col-lg-3">
                            <div class="social">
                                <div class="social-content">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET SOCIAL -->

                    </div>
                </div>
            </div>
            <!-- END / FOOTER TOP -->

            <!-- FOOTER CENTER -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="#"><img src="images/logo-footer.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                                        <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@thelotushotel.com">hello@thelotushotel.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Page site</h4>
                                <ul>
                                    <li><a href="#">Guest Book</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Event</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">ABOUT</h4>
                                <ul>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2021 Wagyingo Hostel All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>