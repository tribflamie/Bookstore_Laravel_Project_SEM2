@extends('layouts.home-layout')
@section('title', 'Home - The best selling individual books')
@section('content')
    <!--=== Flex Slider Start ======-->
    <section class="pt-0 pb-0">
        <div class="slider-bg flexslider">
            <ul class="slides">
                <!--=== SLIDE 1 ===-->
                <li>
                    <div class="slide-img"
                        style="background:url({{ asset('images/background/home-bg-1.jpg') }}) center center / cover scroll no-repeat;">
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
                        style="background:url({{ asset('images/background/home-bg-2.jpg') }}) center center / cover scroll no-repeat;">
                    </div>
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

    <!--=== Proposal Banner Start ======-->
    <section class="parallax-bg-10 fixed-bg fashion-section" data-stellar-background-ratio="0.2">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 white-color">
                    <h1 class="upper-case font-700">Cards for every occasion</h1>
                    <h2 class="mt-30"><a href="#!shop-standard" class="btn btn-outline-white btn-square">Shop Now</a>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <!--=== Proposal Banner End ======-->

    <!--=== Products Start ======-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <ul id="portfolio-filter" class="list-inline filter-transparent text-center">
                    <li class="active" data-group="all">Lastest</li>
                    <li data-group="design">Top Selling</li>
                    <li data-group="web">Most Commented</li>
                </ul>
                @foreach ($products as $product)
                    <div class="col-md-3 col-sm-6">
                        <div class="product">
                            <div class="product-wrap"> <img height="400px" width="500px" src="{{ asset($product->photo) }}"
                                    class="img-responsive" alt="team-01">
                                <div class="product-caption">
                                    <div class="product-description text-center">
                                        <div class="product-description-wrap">
                                            <div class="product-title"> <a href="{{ route('add.to.cart', $product->id) }}"
                                                    class="btn btn-color btn-circle">ADD
                                                    TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a href="{{ route('productDetail', $product->id) }}">
                                    <h4>{{ $product->name }}</h4>
                                </a>
                                <p>
                                    <?php
                                    $count = 0;
                                    //xuất số sao vàng làm tròn trung bình rating trong bảng feedback
                                    for ($count = 1; $count <= round($product->feedbacks->avg('rating')); $count++):
                                        echo '<span class="fa fa-star checked"></span>';
                                    endfor;
                                    //xuất số sao đen còn lại
                                    for (; $count <= 5; $count++):
                                        echo '<span class="fa fa-star"></span>';
                                    endfor;
                                    ?>
                                    <!--đếm số lượng feedbacks trong product-->
                                    ({{ count($product->feedbacks) }})
                                </p>
                                <p>${{ $product->price - $product->price * $product->discount }} <span
                                        class="old-price">${{ $product->price }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Products End ======-->

    <!--=== Proposal Banner Start ======-->
    <section class="parallax-bg-10 fixed-bg fashion-section" data-stellar-background-ratio="0.2">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 white-color">
                    <h1 class="upper-case font-700">Cards for every occasion</h1>
                    <h2 class="mt-30"><a href="#!shop-standard" class="btn btn-outline-white btn-square">Shop Now</a>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <!--=== Proposal Banner End ======-->
@endsection
