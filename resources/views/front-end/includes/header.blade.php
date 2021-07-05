<!-- HEADER -->
<header id="header" class="header-v3 clearfix">
    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">
                <span><i class="lotus-icon-location"></i> DX 32 KINGDOM ST, GHANA</span>
                <span><i class="lotus-icon-phone"></i> +233 203652247</span>
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
                        {{-- <li><a href="{{ route('printslips', [$booking->id]) }}">Print Booking Slip</a></li> --}}
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            <!-- HEADER LOGO -->
            <a class="logo-top img-responsive" href="#"><img src="images/wagyingo_logo.png" alt=""></a>
            <!-- END / HEADER LOGO -->
        </div>
    </div>
    <!-- END / HEADER TOP -->
    <!-- HEADER LOGO & MENU -->
    <div class="header_content" id="header_content">
        <div class="container">
            <!-- HEADER LOGO -->
            <div class="header_logo">
                <a href="#"><img width="100px" height="30px" src="images/wagyingo_logo.png" alt=""></a>
            </div>
            <!-- END / HEADER LOGO -->
            <!-- HEADER MENU -->
            <nav class="header_menu">
                <ul class="menu">
                    <li class="current-menu-item">
                        <a href="/index-homepage">Home</a>
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
                    <li>
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