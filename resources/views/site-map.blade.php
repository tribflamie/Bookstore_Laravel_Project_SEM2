@extends('layouts.layout-banner')
@section('title', 'Site Map - The best selling individual books')
@section('content')
    <!--=== page-title-section start ===-->
    <section class="title-hero-bg shop-cover-bg" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="page-title text-center">
                <h1>papyrus site map</h1>
            </div>
        </div>
    </section>
    <!--=== page-title-section end ===-->

    <!--=== Terms &amp; Conditions Start ===-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 terms">
                    <h2 class="font-700">sitemap</h2>
                    <div class="col-md-6 mb-20 col-sm-6">
                        <h3>Primary Navigation</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('products') }}">Products</a></li>
                            <li><a href="#">Categories</a>
                                <ul class="menu-col">
                                    @foreach ($categories as $category)
                                        <li><a
                                                href="{{ url('products?=sort=&categories=' . $category->id . '&countries=&published=') }}">{{ $category->categories }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-20 col-sm-6">
                        <ul>
                            <li><a href="#">Country</a>
                                <ul class="menu-col">
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
                            <li><a href="#">Published</a>
                                <ul class="menu-col">
                                    <li><a href="#">1791</a></li>
                                    <li><a href="#">1859</a></li>
                                    <li><a href="#">1937</a></li>
                                    <li><a href="#">1939</a></li>
                                    <li><a href="{{ route('products') }}">More</a></li>
                                </ul>
                            </li>
                            <li><a href="#">User</a>
                                <ul class="menu-col">
                                    <li><a href="{{ route('edit.profile') }}">Edit Profile</a></li>
                                    <?php $filter = 'a'; ?>
                                    <li><a href="{{ route('orderHistory', $filter) }}">Order History</a></li>
                                    @if (Auth::user()->role == 'admin')
                                        <li><a href="{{ route('admin.user-tables') }}">Management</a></li>
                                    @endif
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('cart') }}">Cart</a></li>
                        </ul>
                        <h3>Footer</h3>
                        <ul>
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            <li><a href="{{ route('site-map') }}">Site Map</a></li>

                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('term-condition') }}">Terms & Conditions</a></li>
                            <li><a href="{{ route('faqs') }}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Terms &amp; Conditions End ===-->

@endsection
<!--=== Testimonails End ===-->
