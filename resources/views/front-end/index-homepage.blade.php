<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>WAGYINGO HOSTEL</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="/css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="/css/helper.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body> <!--<![endif]-->


<!-- PRELOADER -->
<div id="preloader">
    <span class="preloader-dot"></span>
</div>
<!-- END / PRELOADER -->

<div id="page-wrap" class="bg-white-2">
    
    @include('front-end.includes.header')

    <!-- BANNER SLIDER -->
    <section class="section-slider slider-style-2 clearfix">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
            <ul>
                <li data-transition="fade">
                    <img src="images/slider-5.jpg" transpa data-bgposition="left center" data-duration="14000"
                         data-bgpositionend="right center" alt="">

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100"
                         data-speed="7000" data-start="1500" data-easing="easeOutBack">
                        <img src="images/icon-slider-1.png" alt="icons">
                    </div>

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240"
                         data-speed="700" data-start="1500" data-easing="easeOutBack" style="color:#fff">
                         WELCOME TO
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280"
                         data-speed="700" data-easing="easeOutBack" data-start="2000" style="color:#fff"><b>WAGYINGO HOSTEL</b>
                    </div>

                    <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center"
                       data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200" style="color: white black">VIEW NOW</a>
                </li>

                <li data-transition="fade">
                    <img src="images/slider-3.jpg" data-bgposition="left center" data-duration="14000"
                         data-bgpositionend="right center" alt="">

                    <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300"
                         data-easing="easeOutBack">
                        <img src="images/icon-slider-1.png" alt="">
                    </div>

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack" style="color: black">
                        SERVICE IS
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260"
                         data-speed="700" data-easing="easeOutBack" data-start="2000" style="color: black">
                        UNIQUE 
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200" style="color: black">JUST LIKE YOU
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="395" data-easing="easeOutBack" data-speed="700" data-start="2400"><img
                            src="images/icon-slider-1.png" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- END / BANNER SLIDER -->

    <!-- CHECK AVAILABILITY -->
    <section class="section-check-availability availability-style-2 clearfix">
        <div class="container">
            <div class="check-availability">
                <div class="ot-heading">
                    <h2 class="mb40">CHECK availability</h2>
                </div>
                {!! Form::open(array('route' => 'findrooms', 'method'=>'POST')) !!}
                    @csrf
                    <div class="availability-form mb50">
                        <select class="awe-select" name="room">
                            <option>Room</option>
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Quad">Quad</option>
                            <option value="Basement 2 in 2">Basement 2 in 2</option>
                            <option value="Basement Double">Basement Double</option>
                            <option value="Basement Quad">Basement Quad</option>
                        </select>
                    </div>
                    <div class="vailability-submit">
                        <button type="submit" class="awe-btn awe-btn-13 pr30 pl30 f16 bold font-hind">Check Availability</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    <!-- END / CHECK AVAILABILITY -->

    <!-- ACCOMMODATIONS -->
    <section class="ot-accomd-modations">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading pt80 pb30 text-center row-20">
                            <h2 class="mb15">ACCOMMODATIONS</h2>
                            <p class="sub pr10 pl10">
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page
                                when looking at its layout
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="ot-accomd-modations-content owl-single" data-single_item="false" data-desktop="1"
                             data-small_desktop="1"
                             data-tablet="2" data-mobile="1"
                             data-nav="false"
                             data-pagination="false">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/single"><img class="img-responsive img-full" src="images/Rooms/single.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/single">Single Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/single"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/double"><img class="img-responsive img-full" src="images/Rooms/double.jpg"
                                                             alt="" width="100px" height="100px"></a>
                                        </div>
                                        <h2 class="title"><a href="/double">Double Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/double"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/quad"><img class="img-responsive img-full" src="images/Rooms/quad.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/quad">Quad Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/quad"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/basement2in2"><img class="img-responsive img-full" src="images/Rooms/basement2.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/basement2in2">Basement 2 in 2</a></h2>
                                        <p class="price">
                                            Start from $480 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/basement2in2"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/basementdouble"><img class="img-responsive img-full" src="images/Rooms/bdouble.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/basementdouble">Basement Double</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/basementdouble"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/basementquad"><img class="img-responsive img-full" src="images/Rooms/basement_quad.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/basementquad">Basement Quad</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/basementquad"> View
                                            Details</a>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/single"><img class="img-responsive img-full" src="images/room/img-1.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/single">Single Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/single"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/double"><img class="img-responsive img-full" src="images/room/img-1.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/double">Double Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/double"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/quad"><img class="img-responsive img-full" src="images/room/img-1.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/quad">Quad Room</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/quad"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/basement2in2"><img class="img-responsive img-full" src="images/room/img-1.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/basement2in2">Basement 2 in 2</a></h2>
                                        <p class="price">
                                            Start from $480 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/basement2in2"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/basementdouble"><img class="img-responsive img-full" src="images/room/img-1.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/basementdouble">Basement Double</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/basementdouble"> View
                                            Details</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item room-item text-center accomd-modations-room_1">
                                        <div class="img">
                                            <a href="/basementquad"><img class="img-responsive img-full" src="images/room/img-1.jpg"
                                                             alt=""></a>
                                        </div>
                                        <h2 class="title"><a href="/basementquad">Basement Quad</a></h2>
                                        <p class="price">
                                            Start from $120 per day
                                        </p>
                                        <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="/basementquad"> View
                                            Details</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / ACCOMMODATIONS -->

    <!-- ABOUT -->
    <section class="ot-about mt60">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>ABOUT WAGYINGO HOSTEL</h2>
                            <p class="sub pr10 pl10">
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout
                            </p>
                        </div>
                    </div>
                </div>
                <div class="img-hover-box mb40">
                    <div class="img">
                        <img class="img-responsive" src="images/about.jpg" alt="">
                    </div>
                </div>
               
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END / ABOUT -->

    <!-- OUR BEST -->
    <section class="ot-out-best mt60">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>Our Amenities</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-single owl-best" data-single_item="false" data-desktop="6"
                     data-small_desktop="4"
                     data-tablet="3" data-mobile="2"
                     data-nav="true"
                     data-pagination="false">
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/wifi_icon.png" alt="icon">
                        <span class="font-hind f-500">Free Wifi</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/carp.png" alt="icon">
                        <span class="font-hind f-500">Car Packing</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/studyr.png" alt="icon">
                        <span class="font-hind f-500">Study Room</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/aircon.png" alt="icon">
                        <span class="font-hind f-500">Air Conditioning</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/dstv.jpg" alt="icon">
                        <span class="font-hind f-500">Satelitte TV</span>
                    </div>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="images/scam.png" alt="icon">
                        <span class="font-hind f-500">Security Cam</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / OUR BEST -->

    @include('front-end.includes.footer')
</div>

<!-- LOAD JQUERY -->
<script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
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
