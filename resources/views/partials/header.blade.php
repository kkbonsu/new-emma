<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="/home" class="b-brand" style="color: white">
            <!-- ========   change your logo hear   ============ -->
            {{-- <img src="/assets/images/logo.png" alt="" class="logo"> --}}
            HOME
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav ml-auto">
            @guest
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <span>Login</span>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </div>
                        <ul class="pro-body">
                            {{-- <li><a href="#" class="dropdown-item"><i class="fas fa-undo-alt"></i> Change Your Password</a></li> --}}
                            {{-- <li><a href="#" class="dropdown-item"><i class="fas fa-fingerprint"></i> Audit Trails</a></li> --}}
                        </ul>
                    </div>
                </div>
            </li>
            @else
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <span>{{ Auth::user()->name }}</span>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dud-logout" title="Logout">
                                <i class="feather icon-power"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</header>
<!-- [ Header ] end -->