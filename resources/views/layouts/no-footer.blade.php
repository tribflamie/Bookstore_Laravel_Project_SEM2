<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scoda. - Multipurpose One Page HTML5 Template</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

    <!--=== Loader Start ======-->
    <div id="loader-overlay">
        <div class="loader-wrapper">
            <div class="scoda-pulse"></div>
        </div>
    </div>
    <!--=== Loader End ======-->

    <!--=== Wrapper Start ======-->
    <div class="wrapper">
        <!--=== Header Start ======-->
        <nav class="navbar navbar-default navbar-fixed white bootsnav on no-full navbar-transparent">
            <!--=== Start Top Search ===-->
            <div class="fullscreen-search-overlay" id="search-overlay"><a href="#" class="fullscreen-close"
                    id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
                <div id="fullscreen-search-wrapper">
                    <form method="get" id="fullscreen-searchform">
                        <input type="text" value="" placeholder="Type and hit Enter..."
                            id="fullscreen-search-input" class="search-bar-top">
                        <i class="icofont icofont-search-1 fullscreen-search-icon">
                            <input value="" type="submit">
                        </i>
                    </form>
                </div>
            </div>
            <!--=== End Top Search ===-->

            <div class="container">
                <!--=== Start Atribute Navigation ===-->
                <div class="attr-nav">
                    <ul>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                                    class="icofont icofont-cart"></i> <span class="badge">3</span> </a>
                            <ul class="dropdown-menu cart-list">
                                <li> <a href="#" class="photo"><img src="{{ asset('images/thumb01.jpg') }}"
                                            class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Delica omtantur </a></h6>
                                    <p>2x - <span class="price">$99.99</span></p>
                                </li>
                                <li> <a href="#" class="photo"><img src="{{ asset('images/thumb02.jpg') }}"
                                            class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Omnes ocurreret</a></h6>
                                    <p>1x - <span class="price">$33.33</span></p>
                                </li>
                                <li> <a href="#" class="photo"><img src="{{ asset('images/thumb03.jpg') }}"
                                            class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Agam facilisis</a></h6>
                                    <p>2x - <span class="price">$99.99</span></p>
                                </li>
                                <li class="total"> <span class="pull-right"><strong>Total</strong>: $0.00</span> <a
                                        href="#" class="btn btn-default btn-cart">Cart</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--=== End Atribute Navigation ===-->

                <!--=== Start Header Navigation ===-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                            class="icofont icofont-navigation-menu"></i> </button>
                    <div class="logo"> <a href="home"> <img class="logo logo-display"
                                src="{{ asset('images/logo-white.png') }}" alt=""> <img
                                class="logo logo-scrolled" src="{{ asset('images/logo-black.png') }}" alt="">
                        </a> </div>
                </div>
                <!--=== End Header Navigation ===-->

                <!--=== Collect the nav links, forms, and other content for toggling ===-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        </li>
                        <li class="dropdown megamenu-fw"> <a href="index.html" class="dropdown-toggle"
                                data-toggle="dropdown">Genre</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Home Layouts</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="index.html">Creative Agency</a></li>
                                                    <li><a href="small-business.html">Small Business</a></li>
                                                    <li><a href="corporate-business.html">Corporate Business</a></li>
                                                    <li><a href="startup-business.html">Startup Business</a></li>
                                                    <li><a href="minimal.html">Minimal Design</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-3 ===-->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Home Layouts</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="creative-onepage.html">Creative One page</a></li>
                                                    <li><a href="creative-portfolio.html">Creative Portfolio</a></li>
                                                    <li><a href="personal-resume.html">Personal Resume</a></li>
                                                    <li><a href="seo-agency.html">SEO Agency</a></li>
                                                    <li><a href="digital-agency.html">Digital Agency</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-3 ===-->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Home Layouts</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="architecture.html">Architecture</a></li>
                                                    <li><a href="restaurant.html">Restaurant</a></li>
                                                    <li><a href="online-shop.html">Online Shop</a></li>
                                                    <li><a href="photography.html">Photography</a></li>
                                                    <li><a href="gym-fitness.html">Gym / Fitness</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Home Layouts</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="app-style.html">App Style</a></li>
                                                    <li><a href="travel-agency.html">Travel Agency</a></li>
                                                    <li><a href="construction.html">Construction</a></li>
                                                    <li><a href="music.html">Music</a></li>
                                                    <li><a href="weddings.html">Weddings</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-3 ===-->
                                    </div>
                                    <!--=== end row ===-->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown">Language</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown">Published</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
                <!--=== /.navbar-collapse ===-->

            </div>
        </nav>
        <!--=== Header End ======-->

        <!--=== Section Start ======-->
        <div>@yield('content')</div>
        <!--=== Section End ======-->

        <!--=== GO TO TOP  ===-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--=== GO TO TOP End ===-->

    </div>
    <!--=== Wrapper End ======-->

    <!--=== Javascript Plugins ======-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>
    <script src="{{ asset('js/bootsnav.js') }}"></script>
    <!--=== Javascript Plugins End ======-->

</body>

</html>
