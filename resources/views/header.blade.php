@section('header')
    <!-- Main Header -->
<header class="main-header header-style-one">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container" >
            <div class="inner-container">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href={{ route('home') }}>
                        <img src="/cms/logo/{{ app('contact')->logo }}" alt="la bergerie logo"></a></div>
                </div>
                <!--Nav Box-->
                <div class="nav-outer">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><img src="/assets/icon-bar.png" alt="icon bar"></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation">
                                <li class={{ Request::path() === '/' ? 'current' : ''}}><a href={{ route('home') }}>Home</a>

                                </li>
                                <li class={{ Request::path() === 'le-luberon' ? 'current' : ''}}><a href={{ route('le-luberon') }}>Le Luberon</a>

                                </li>
                                <li class={{ Request::path() === 'gallery' ? 'current' : ''}}><a href={{ route('gallery') }}>Gallery</a>

                                </li>
                                <li class={{ Request::path() === 'practical-information' ? 'current' : ''}}><a href={{ route('practicalinformation') }}>Practical Information</a></li>
                                <li class={{ Request::path() === 'how-to-arrive' ? 'current' : ''}}><a href={{ route('howtoarrive') }}>How to arrive</a></li>
                                <li class={{ Request::path() === 'contact' ? 'current' : ''}}><a href={{ route('contact') }}>Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                </div>
            <div class="right-column">
                    <div class="navbar-right">
                        <div class="link-btn"><a href={{ route('booknow') }} class="btn-one">Book Now + <span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href={{ route('home') }}><img src="/assets/la-bergerie-logo.png" alt="la bergerie logo mobile"></a></div>
                    </div>
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img src="/assets/icon-bar.png" alt="icon bar mobile"></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">

                                </ul>
                            </div>
                        </nav>
                    </div>
                  <div class="right-column">
                        <div class="navbar-right">
                            <div class="link-btn"><a href={{ route('booknow') }} class="btn-one">Book Now + <span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="icon far fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href={{ route('home') }}><img src="/assets/la-bergerie-logo.png" alt="La bergerie logo" title=""></a></div>
            <ul class="navigation">
                <li class={{ Request::path() === '/' ? 'current' : ''}}><a href={{ route('home') }}>Home</a>

                </li>
                <li class={{ Request::path() === 'le-luberon' ? 'current' : ''}}><a href={{ route('le-luberon') }}>Le Luberon</a>

                </li>
                <li class={{ Request::path() === 'gallery' ? 'current' : ''}}><a href={{ route('gallery') }}>Gallery</a>

                </li>
                <li class={{ Request::path() === 'practical-information' ? 'current' : ''}}><a href={{ route('practicalinformation') }}>Practical Information</a></li>
                <li class={{ Request::path() === 'how-to-arrive' ? 'current' : ''}}><a href={{ route('howtoarrive') }}>How to arrive</a></li>
                <li class={{ Request::path() === 'contact' ? 'current' : ''}}><a href={{ route('contact') }}>Contact</a></li>
            </ul>
            <div class="button-column">
                    <div class="link-btn"><a href={{ route('booknow') }} class="btn-one">Book Now + <span></span></a></div>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>
<!-- End Main Header -->

@endsection('header')
