<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Contact Wagyingo Hostel</title>

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
                        <a href="#"><img src="images/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li>
                                <a href="/index-homepage">Home </a>
                            </li>
                            <li>
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
                                <a href="/gallery">Gallery</a>
                            </li>
                            <li class="current-menu-item">
                                <a href="/contact">Contact</a>
                            </li>
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
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>CONTACT US</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- CONTACT -->
        <section class="section-contact">
            <div class="container">
                <div class="contact">
                    <div class="row">

                        <div class="col-md-6 col-lg-5">

                            <div class="text">
                                <h2>Contact</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                <ul>
                                    <li><i class="icon lotus-icon-location"></i> 225 Beach Street, Australian</li>
                                    <li><i class="icon lotus-icon-phone"></i> +61 2 6854 8496</li>
                                    <li><i class="icon fa fa-envelope-o"></i> lotushotel@gmail.com</li>
                                </ul>
                            </div>

                            <div class="contact-location">
                                <a class="btn-collapse" data-toggle="collapse" href="#location">OTHER LOCATION <span class="fa fa-angle-down"></span></a>
                                <div class="collapse" id="location">
                                    <div class="location-group">
                                        <h6>NORTH AMERICA</h6>
                                        <span>Caribbean, French West Indies</span>

                                        <!-- ITEM -->
                                        <div class="location-item" data-location="39.0926986,-94.5747324">
                                            <div class="img">
                                                <img src="images/contact/img-1.jpg" alt="">
                                                <i class="fa  fa-map-marker"></i>
                                            </div>
                                            <div class="text">
                                                <address>PO Box 4077, 2584 St Martin, CEDEX, French West Indies</address>
                                                <p>
                                                    Tel: 858 634 8975 <br>
                                                    Fax: +1 212 854 7039
                                                </p>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                        <!-- ITEM -->
                                        <div class="location-item" data-location="39.0912284,-94.5743515">
                                            <div class="img">
                                                <img src="images/contact/img-2.jpg" alt="">
                                                <i class="fa  fa-map-marker"></i>
                                            </div>
                                            <div class="text">
                                                <address>PO Box 4077, 2584 St Martin, CEDEX, French West Indies</address>
                                                <p>
                                                    Tel: 858 634 8975 <br>
                                                    Fax: +1 212 854 7039
                                                </p>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-6 col-lg-offset-1">
                            <div class="contact-form">
                                <form id="send-contact-form" action="send_mail_contact.php" method="post"> 
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text"  name="name" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="field-text" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="10" name="message"  class="field-textarea" placeholder="Write what do you want"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="awe-btn awe-btn-13">SEND</button>
                                        </div>
                                    </div>
                                    <div id="contact-content"></div>
                                </form>
                            </div>
                        </div>

                    </div>  
                </div>
            </div>
        </section>
        <!-- END / CONTACT -->

        <!-- MAP -->
        {{-- <section class="section-map">
            <h1 class="element-invisible">Map</h1>
            <div class="contact-map">
                <div id="map" data-locations="39.0926986,-94.5747324--39.0912284,-94.5743515" data-center="39.0926986,-94.5747324"></div>
            </div>
        </section> --}}
        <!-- END / MAP -->
        
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
    <script src="//maps.google.com/maps/api/js?key=AIzaSyAb2lfsiytHD7rMhBaAvJz2CKhk05uiIuE"></script>
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
    <!-- validate -->
    <script type="text/javascript" src="js/lib/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.validate.min.js"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>