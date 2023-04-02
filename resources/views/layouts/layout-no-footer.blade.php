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
    <!--=== Wrapper Start ======-->
    <div class="wrapper">
        <!--=== Header Start ======-->
        <nav class="navbar navbar-default navbar-fixed white bootsnav on no-full navbar-transparent">
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
                                data-toggle="dropdown">Bookstore</a>
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
                                                                href="{{ route('product', $category->id) }}">{{ $category->categories }}</a>
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
                                                <li><a href="#">Self-help</a></li>
                                                <li><a href="#">Magic realism</a></li>
                                                <li><a href="#">Novel</a></li>
                                                <li><a href="#">Children's novel</a></li>
                                                <li><a href="#">Historical novel</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Sexology</a></li>
                                                <li><a href="#">Young adult</a></li>
                                                <li><a href="#">Science fiction</a></li>
                                                <li><a href="#">Anthropology</a></li>
                                                <li><a href="#">Psychology</a></li>
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
                            <li><a href="#">English</a></li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">Chinese</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">See More</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle"
                            data-toggle="dropdown">Published</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">1791</a></li>
                            <li><a href="#">1859</a></li>
                            <li><a href="#">1937</a></li>
                            <li><a href="#">1939</a></li>
                            <li><a href="#">See More</a></li>
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
                                <?php $filter='a';?>
                                <li><a href="{{ route('orderHistory',$filter)}}">Order History</a></li>
                                <li><a href="{{ route('feedbacks') }}">Feedbacks</a></li>
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
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>
    <script src="{{ asset('js/bootsnav.js') }}"></script>
    <!--=== Javascript Plugins End ======-->
</body>

</html>
