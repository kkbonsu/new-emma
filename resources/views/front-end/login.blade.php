<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Login - Wagyingo Hostel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="/css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="/css/lib/bootstrap-select.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    
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

        @include('front-end.includes.loginheader')

        <!-- ACCOUNT -->
        <section class="section-account parallax bg-11">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register">
                    <div class="text text-center">
                        <h2>LOGIN</h2>
                        <p>Log into your account</p>
                        <form action="{{ route('login') }}" method="POST" class="account_form">
                            @csrf
                            <div class="field-form">
                                <input type="email" class="field-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email"  placeholder="Email address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field-form">
                                <input id="password" type="password" class="field-text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                <span class="view-pass"><i class="lotus-icon-view"></i></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <span class="account-desc">I don’t have an account  -  <a href="#">Forgot Password</a></span> --}}
                            <div class="field-form field-submit">
                                <button class="awe-btn awe-btn-13">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ACCOUNT -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="/js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="/js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="/js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="/js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="/js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="/js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
</body>
</html>