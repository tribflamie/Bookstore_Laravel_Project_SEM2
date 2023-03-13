<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Papyrus Limited - The Best Expression Card Shop</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body ng-app="myApp" ng-controller="addCart">

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
                        <li class="dropdown">
                            <a href="#!shop-cart" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icofont icofont-cart"></i>
                                <span class="badge">@{{ total2 }}</span>
                            </a>
                        </li>
                        <li class="search"><a href="#"><i class="icofont icofont-users"></i></a>
                        </li>
                        <li class="search"><a href="#" id="visits"></a>
                        </li>
                    </ul>
                </div>
                <!--=== End Atribute Navigation ===-->

                <!--=== Start Header Navigation ===-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                            class="icofont icofont-navigation-menu"></i></button>
                    <div class="logo">
                        <a href="#">
                            <img class="logo logo-display" src="img/logo/white-logo.png">
                            <img class="logo logo-scrolled" src="img/logo/black-logo.png">
                        </a>
                    </div>
                </div>
                <!--=== End Header Navigation ===-->

                <!--=== Collect the nav links, forms, and other content for toggling ===-->
                <div ng-controller="MainCtrl" class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                        <li>
                            <a href="#/!" class="dropdown-toggle" data-toggle="dropdown"
                                ng-class="{ active1: activePath=='/' }">Home</a>
                        </li>
                        <li class="dropdown megamenu-fw"><a ng-class="{ active1: activePath=='/shop-standard' }"
                                href="#!shop-standard" class="dropdown-toggle" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <!--=== end col-3 ===-->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Shop</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a ng-class="{ active: activePath=='/shop-standard' }"
                                                            href="#!shop-standard">Shop General</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-3 ===-->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Category</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a ng-class="{ active: activePath=='/greetingcard' }"
                                                            href="#!/greetingcard">Greeting Card</a></li>
                                                    <li><a ng-class="{ active: activePath=='/wrappaper' }"
                                                            href="#!/wrappaper">Wrapping Paper</a></li>
                                                    <li><a ng-class="{ active: activePath=='/giftbag' }"
                                                            href="#!/giftbag">Gift Bags</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-3 ===-->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Occasion</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a ng-class="{ active: activePath=='/anniversary' }"
                                                            href="#!/anniversary">Anniversary</a></li>
                                                    <li><a ng-class="{ active: activePath=='/birthday' }"
                                                            href="#!/birthday">Birthday</a></li>
                                                    <li><a ng-class="{ active: activePath=='/congratulation' }"
                                                            href="#!/congratulation">Congratulation</a></li>
                                                    <li><a ng-class="{ active: activePath=='/friendship' }"
                                                            href="#!/friendship">Friendship</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-3 ===-->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Holiday</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a ng-class="{ active: activePath=='/mothersday' }"
                                                            href="#!/mothersday">Mother's Day</a></li>
                                                    <li><a ng-class="{ active: activePath=='/newyear' }"
                                                            href="#!/newyear">New Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-3 ===-->
                                    </div>
                                    <!--=== end row ===-->
                                </li>
                            </ul>
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
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

        <!--=== Footer Start ======-->
        <footer class="footer" id="footer-fixed">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="widget widget-text">
                                <div class="logo logo-footer"><a href="#/!"> <img class="logo logo-display"
                                            src="img/logo/white-logo.png" alt=""></a></div>
                                <p>Papyrus Limited captures meaningful moments, honor special relationships, express who
                                    you are and help you relive timeless memories, year after year.</p>
                                <p>© All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="widget widget-links">
                                <h5 class="widget-title">about</h5>
                                <ul>
                                    <li><a href="#!about-us">About Us</a></li>
                                    <li><a href="#!shop-standard">Our Products</a></li>
                                    <li><a href="#!faqs">FAQ's</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="widget widget-links">
                                <h5 class="widget-title">site info</h5>
                                <ul>
                                    <li><a href="#!privacy">Privacy Policy</a></li>
                                    <li><a href="#!term-condition">Terms & Conditions</a></li>
                                    <li><a href="#!sitemap">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="widget widget-text widget-links">
                                <h5 class="widget-title">Contact Us</h5>
                                <ul>
                                    <li> <i class="icofont icofont-google-map"></i> <a>275 Nguyen Van Dau, Binh Thanh
                                            District, Ho Chi Minh City, Viet Nam</a> </li>
                                    <li> <i class="icofont icofont-iphone"></i> <a>+44 1632 960290</a> </li>
                                    <li> <i class="icofont icofont-mail"></i> <a>papyrus@gmail.com</a> </li>
                                    <li> <i class="icofont icofont-globe"></i> <a>www.papyrus.com</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=== Footer End ======-->

        <!--=== GO TO TOP  ===-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--=== GO TO TOP End ===-->

    </div>
    <!--=== Wrapper End ======-->

    <!--=== Javascript Plugins ======-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>
    <script src="{{ asset('js/bootsnav.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-animate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-route/1.8.2/angular-route.min.js"></script>
    <script src="{{ asset('js/ui-bootstrap-tpls-2.5.0.min.js') }}"></script>
    <script src="{{ asset('js/myApp.js') }}"></script>
    <!--=== Javascript Plugins End ======-->

</body>

</html>
