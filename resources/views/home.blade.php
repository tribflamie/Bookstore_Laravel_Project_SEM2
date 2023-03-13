@extends('layouts.app')

@section('content')
    <!--=== Flex Slider Start ======-->
    <section class="pt-0 pb-0">
        <div class="slider-bg flexslider">
            <ul class="slides">
                <!--=== SLIDE 1 ===-->
                <li>
                    <div class="slide-img" style="background:url(img/main-bg.jpg) center center / cover scroll no-repeat;">
                    </div>
                    <div class="hero-text-wrap">
                        <div class="hero-text white-color text-left">
                            <div class="container">
                                <h3 class="white-color font-400 cardo-font">Celebrate Their Love</h3>
                                <h2 class="white-color text-uppercase font-700">Flash Sale Of 80%</h1>
                                    <p class="text-left mt-30"><a class="btn btn-dark btn-circle">Shop Now</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <!--=== SLIDE 2 ===-->
                <li>
                    <div class="slide-img"
                        style="background:url(img/main-2-bg.jpg) center center / cover scroll no-repeat;"></div>
                    <div class="hero-text-wrap">
                        <div class="hero-text white-color text-left">
                            <div class="container">
                                <h3 class="white-color font-400 cardo-font">Birthday Wishes That Shine</h3>
                                <h2 class="white-color text-uppercase font-700">Flash Sale Of 70%</h2>
                                <p class="text-left mt-30"><a class="btn btn-outline-white btn-circle">Purchase Now</a></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--=== Flex Slider End ======-->

    <!--=== Top Selling Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="text-uppercase">Top Selling</h2>
                    <h3 class="mt-10 cardo-font">Most People Buy</h3>
                </div>
            </div>
            <div class="row mt-50">
                <div ng-repeat="item in producttop" class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img ng-src="@{{ item.frontImage }}" class="img-responsive"
                                alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a ng-click="addToCart(item)" href=""
                                                class="btn btn-white btn-square">ADD TO CART <span class="icon"><i
                                                        class="icofont icofont-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="product-link" href="#!/product-detail/@{{ item.id }}">@{{ item.title }}
                                @{{ item.cat }}</a>
                            <p>$@{{ item.price }} <span class="old-price">$@{{ item.oldPrice }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Top Selling End ======-->

    <!--=== Proposal Banner Start ======-->
    <section class="parallax-bg-10 fixed-bg fashion-section" data-stellar-background-ratio="0.2">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 white-color">
                    <h1 class="upper-case font-700">Cards for every occasion</h1>
                    <h2 class="mt-30"><a href="#!shop-standard" class="btn btn-outline-white btn-square">Shop Now</a></h2>
                </div>
            </div>
        </div>
    </section>
    <!--=== Proposal Banner End ======-->

    <!--=== Most New Products Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="text-uppercase">New Products</h2>
                    <h3 class="mt-10 cardo-font">Update Everyday</h3>
                </div>
            </div>
            <div class="row mt-50">
                <div ng-repeat="item in productnew" class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img ng-src="@{{ item.frontImage }}" class="img-responsive"
                                alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a ng-click="addToCart(item)" href=""
                                                class="btn btn-white btn-square">ADD TO CART <span class="icon"><i
                                                        class="icofont icofont-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="product-link" href="#!/product-detail/@{{ item.id }}">@{{ item.title }}
                                @{{ item.tag }}</a>
                            <p>$@{{ item.price }} <span class="old-price">$@{{ item.oldPrice }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Most New Products End ======-->
@endsection
