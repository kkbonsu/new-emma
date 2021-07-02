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
                    <span><a href="{{ route('login') }}">Login</a></span>
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
                    {{-- <li class="current-menu-item">
                        <a href="/index-homepage">Home</a>
                    </li> --}}
                    <li>
                        <a href="/about">About</a>
                    </li>
                    {{-- <li>
                        <a href="#">Rooms <span class="fa fa-caret-down"></span></a>
                        <ul class="sub-menu">
                            <li><a href="/single">Single</a></li>
                            <li><a href="/double">Double</a></li>
                            <li><a href="/quad">Quad</a></li>
                            <li><a href="/basement2in2">Basement 2 in 2</a></li>
                            <li><a href="/basementdouble">Basement Double</a></li>
                            <li><a href="/basementquad">Basement Quad</a></li>
                        </ul>
                    </li> --}}
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