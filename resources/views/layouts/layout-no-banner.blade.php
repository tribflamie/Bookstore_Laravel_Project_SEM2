<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <!--=== Wrapper Start ======-->
    <div class="wrapper" id="main">
        <!--=== Header Start ======-->
        <nav class="navbar navbar-default navbar-fixed white bootsnav on no-full">
            <div class="container">
                <!--=== Start Atribute Navigation ===-->
                <div class="attr-nav">
                    <ul>
                        <li class="dropdown"> <a href="{{ route('cart') }}" class="dropdown-toggle"
                                data-toggle="dropdown"> <i class="icofont icofont-cart"></i> <span
                                    class="badge">{{ count((array) session('cart')) }}</span> </a>
                            <ul class="dropdown-menu cart-list">
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        <li> <a href="#" class="photo"><img src="{{ asset($details['photo']) }}"
                                                    class="cart-thumb" alt="" /></a>
                                            <h6><a href="#">{{ $details['name'] }}</a></h6>
                                            <p>{{ $details['quantity'] }}x - <span
                                                    class="price">${{ $details['price'] }}</span></p>
                                            </span></p>
                                        </li>
                                    @endforeach
                                @endif
                                <?php $total = 0; ?>
                                @foreach ((array) session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity']; ?>
                                @endforeach
                                <li class="total"> <span class="pull-right"><strong>Total</strong>:
                                        ${{ $total }}</span> <a href="{{ route('cart') }}"
                                        class="btn btn-default btn-cart">Cart</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--=== End Atribute Navigation ===-->

                <!--=== Start Header Navigation ===-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="icofont icofont-navigation-menu"></i> </button>
                    <div class="logo"> <a href="{{ route('home') }}"> <img class="logo logo-display"
                                src="{{ asset('images/white-logo.png') }}" alt=""> <img
                                class="logo logo-scrolled" src="{{ asset('images/black-logo.png') }}" alt="">
                        </a> </div>
                </div>
                <!--=== End Header Navigation ===-->

                <!--=== Collect the nav links, forms, and other content for toggling ===-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                        <li>
                            <a href="{{ route('home') }}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}" class="dropdown-toggle"
                                data-toggle="dropdown">Products</a>
                        </li>
                        <li class="dropdown megamenu-fw"> <a href="index.html" class="dropdown-toggle"
                                data-toggle="dropdown">Categories</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    @foreach ($categories as $category)
                                                        @if ($category->id == 6)
                                                        @break;
                                                    @else
                                                        <li><a
                                                                href="{{ url('products?=sort=&categories=' . $category->id . '&countries=&published=') }}">{{ $category->categories }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!--=== end col-3 ===-->
                                    <div class="col-menu col-md-3">
                                        <div class="content">
                                            <ul class="menu-col">
                                                @foreach ($categories as $category)
                                                    @if ($category->id >= 6)
                                                        <li><a
                                                                href="{{ url('products?=sort=&categories=' . $category->id . '&countries=&published=') }}">{{ $category->categories }}</a>
                                                        </li>
                                                        @if ($category->id == 10)
                                                        @break;
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-menu col-md-3">
                                    <div class="content">
                                        <ul class="menu-col">
                                            @foreach ($categories as $category)
                                                @if ($category->id > 10)
                                                    <li><a
                                                            href="{{ url('products?=sort=&categories=' . $category->id . '&countries=&published=') }}">{{ $category->categories }}</a>
                                                    </li>
                                                    @if ($category->id == 14)
                                                    @break;
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!--=== end col-3 ===-->
                        </div>
                        <!--=== end row ===-->
                    </li>
                </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle"
                    data-toggle="dropdown">Country</a>
                <ul class="dropdown-menu">
                    <li><a
                            href="{{ url('products?sort=&categories=&countries=United+Kingdom&published=') }}">United
                            Kingdom</a></li>
                    <li><a
                            href="{{ url('products?=sort=&categories=&countries=Australia&published=') }}">Australia</a>
                    </li>
                    <li><a
                            href="{{ url('products?=sort=&categories=&countries=France&published=') }}">France</a>
                    </li>
                    <li><a
                            href="{{ url('products?=sort=&categories=&countries=Russia&published=') }}">Russia</a>
                    </li>
                    <li><a href="{{ route('products') }}">More</a></li>
                </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle"
                    data-toggle="dropdown">Year</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('products?=sort=&categories=&countries=&published=1791') }}">1791</a></li>
                    <li><a href="{{ url('products?=sort=&categories=&countries=&published=1859') }}">1859</a></li>
                    <li><a href="{{ url('products?=sort=&categories=&countries=&published=1937') }}">1937</a></li>
                    <li><a href="{{ url('products?=sort=&categories=&countries=&published=1939') }}">1939</a></li>
                    <li><a href="{{ route('products') }}">More</a></li>
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
                <li class="dropdown">
                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="{{ route('edit.profile') }}">Edit Profile</a></li>
                        <?php $filter = 'a'; ?>
                        <li><a href="{{ route('orderHistory', $filter) }}">Order History</a></li>
                        <li><a href="{{ route('feedbacks') }}">Feedbacks</a></li>
                        @if (Auth::user()->role == 'admin')
                            <li><a href="{{ route('admin.overview') }}">Administration</a></li>
                        @endif
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

<!--=== Footer Start ======-->
<footer class="footer" id="footer-fixed">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="widget widget-text">
                        <div class="logo logo-footer"><a href="index.html"> <img class="logo logo-display"
                                    src="{{ asset('images/white-logo.png') }}" alt=""></a> </div>
                        <p>Papyrus works to connect readers with independent booksellers all over the world. We believe local bookstores are essential community hubs that foster culture, curiosity, and a love of reading, and we're committed to helping them thrive.</p>
                        <p>© All rights reserved.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="widget widget-links">
                        <h5 class="widget-title">Get to know us</h5>
                        <ul>
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            <li><a href="{{ route('site-map') }}">Site Map</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="widget widget-links">
                        <h5 class="widget-title">Let us help you</h5>
                        <ul>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('term-condition') }}">Terms & Conditions</a></li>
                            <li><a href="{{ route('faqs') }}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="widget widget-text widget-links">
                        <h5 class="widget-title">Here we are</h5>
                        <ul>
                            <li> <i class="icofont icofont-google-map"></i> <a>275 Nguyen Van Dau, Binh
                                    Thanh
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
@yield('scripts')
<script src="{{ asset('js/validator.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/master.js') }}"></script>
<script src="{{ asset('js/bootsnav.js') }}"></script>
<!--=== Javascript Plugins End ======-->

</body>

</html>
