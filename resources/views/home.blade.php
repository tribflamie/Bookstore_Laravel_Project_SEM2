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
                        style="background:url({{ asset('images/background/Home-banner2.jpg') }}) center center / cover scroll no-repeat;">
                    </div>
                    <div class="hero-text-wrap">
                        <div class="hero-text white-color text-left">
                            <div class="container">
                                <h3 class="white-color font-400 cardo-font">Explore The World</h3>
                                <h2 class="white-color text-uppercase font-700">Flash Sale Of 80%</h1>
                                    <p class="text-left mt-30"><a class="btn btn-dark btn-circle">Shop Now</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <!--=== SLIDE 2 ===-->
                <li>
                    <div class="slide-img"
                        style="background:url({{ asset('images/background/home-banner.jpg') }}) center center / cover scroll no-repeat;">
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

    <!--=== Top Discount Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="text-uppercase">Top discount</h2>
                    <h4 class="text-uppercase source-font">- Hot Deal for you -</h4>
                </div>
            </div>
            <div>
                <div class="col-md-12 remove-padding">
                    <div class="owl-carousel blog-slider">
                        <?php $cnt = 0; ?>
                        @foreach ($topDiscount as $top)
                            <div class="post">
                                <div class="post-img"> <img class="img-responsive" src="{{ asset($top->photo) }}"
                                        alt="" /> </div>
                                <div class="product-detail">
                                    <a href="{{ route('productDetail', $top->id) }}">
                                        <h3>{{ $top->name }}</h3>
                                    </a>
                                    <h3 class="grey">
                                        <?php
                                        $count = 0;
                                        //xuất số sao vàng làm tròn trung bình rating trong bảng feedback
                                        for ($count = 1; $count <= round($top->feedbacks->avg('rating')); $count++):
                                            echo '<span class="fa fa-star checked"></span>';
                                        endfor;
                                        //xuất số sao đen còn lại
                                        for (; $count <= 5; $count++):
                                            echo '<span class="fa fa-star"></span>';
                                        endfor;
                                        ?>
                                        <!--đếm số lượng feedbacks trong top-->
                                        ({{ count($top->feedbacks) }})
                                    </h3>
                                    <h4>${{ $top->price - $top->price * $top->discount }} <span
                                            class="old-price">${{ $top->price }}</span></h4>
                                    <a href="{{ route('add.to.cart', $top->id) }}" class="btn btn-color btn-circle">ADD
                                        TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                    <?php $cnt++; ?>
                                </div>
                            </div>
                            @if ($cnt >= 10)
                            @break;
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== Top Discount End ======-->

<!--=== Proposal Banner Start ======-->
<section class="parallax-bg-10 fixed-bg fashion-section" data-stellar-background-ratio="0.2">
    <div class="overlay-bg">
        <div class="slide-img"
            style="background:url({{ asset('images/background/home-banner6.jpg') }}) center center / cover scroll no-repeat;">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 white-color">
                <h1 class="upper-case font-700">Books for every occasion</h1>
                <h2 class="mt-30"><a href="#!shop-standard" class="btn btn-outline-white btn-square">Shop Now</a>
                </h2>
            </div>
        </div>
    </div>
</section>
<!--=== Proposal Banner End ======-->

<!--=== Top Rating ======-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 section-heading">
                <h2 class="text-uppercase">Top Rating</h2>
                <h4 class="text-uppercase source-font">- Recommented Books -</h4>
            </div>
        </div>
        <div>
            <div class="col-md-12 remove-padding">
                <div class="owl-carousel blog-slider">
                    @foreach ($topRating as $top)
                        <div class="post">
                            <div class="post-img"> <img class="img-responsive" src="{{ asset($top->photo) }}"
                                    alt="" /> </div>
                            <div class="product-detail">
                                <a href="{{ route('productDetail', $top->id) }}">
                                    <h3>{{ $top->name }}</h3>
                                </a>
                                <h3 class="grey">
                                    <?php
                                    $count = 0;
                                    //xuất số sao vàng làm tròn trung bình rating trong bảng feedback
                                    for ($count = 1; $count <= round($top->ratings); $count++):
                                        echo '<span class="fa fa-star checked"></span>';
                                    endfor;
                                    //xuất số sao đen còn lại
                                    for (; $count <= 5; $count++):
                                        echo '<span class="fa fa-star"></span>';
                                    endfor;
                                    ?>
                                    <!--đếm số lượng feedbacks trong top-->
                                    ({{ count($top->feedbacks) }})
                                </h3>
                                <h4>${{ $top->price - $top->price * $top->discount }} <span
                                        class="old-price">${{ $top->price }}</span></h4>
                                <a href="{{ route('add.to.cart', $top->id) }}" class="btn btn-color btn-circle">ADD
                                    TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== Top Rating End ======-->

<!--=== Proposal Banner Start ======-->
<section class="parallax-bg-10 fixed-bg fashion-section" data-stellar-background-ratio="0.2">
    <div class="overlay-bg">
        <div class="slide-img"
            style="background:url({{ asset('images/background/Home-banner7.jpg') }}) center center / cover scroll no-repeat;">
        </div>
    </div>
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

<!--=== New Books Start ======-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 section-heading">
                <h2 class="text-uppercase">New Books</h2>
                <h3 class="mt-10 cardo-font">Update Everyday</h3>
            </div>
        </div>
        <div>
            @foreach ($topNewest as $top)
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img height="400px" width="500px" src="{{ asset($top->photo) }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="{{ route('add.to.cart', $top->id) }}"
                                                class="btn btn-color btn-circle">ADD
                                                TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a href="{{ route('productDetail', $top->id) }}">
                                <h4>{{ $top->name }}</h4>
                            </a>
                            <h4 class="grey">
                                <?php
                                $count = 0;
                                //xuất số sao vàng làm tròn trung bình rating trong bảng feedback
                                for ($count = 1; $count <= round($top->feedbacks->avg('rating')); $count++):
                                    echo '<span class="fa fa-star checked"></span>';
                                endfor;
                                //xuất số sao đen còn lại
                                for (; $count <= 5; $count++):
                                    echo '<span class="fa fa-star"></span>';
                                endfor;
                                ?>
                                <!--đếm số lượng feedbacks trong top-->
                                ({{ count($top->feedbacks) }})
                            </h4>
                            <p>${{ $top->price - $top->price * $top->discount }} <span
                                    class="old-price">${{ $top->price }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix">
                        <ul class="pagination" style="margin-top: 0px">

                            <li class="product-detail" style="font-size: 20px"><a
                                    href="{{ route('products') }}">View All</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== New Books End ======-->

<!--=== Proposal Banner Start ======-->
<section class="parallax-bg-10 fixed-bg fashion-section" data-stellar-background-ratio="0.2">
    <div class="overlay-bg">
        <div class="slide-img"
            style="background:url({{ asset('images/background/Home-banner8.jpg') }}) center center / cover scroll no-repeat;">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 white-color">
                <h1 class="upper-case font-700">Books for every occasion</h1>
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
                        <div class="product-wrap"> <img height="400px" width="500px"
                                src="{{ asset($product->photo) }}" class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a
                                                href="{{ route('add.to.cart', $product->id) }}"
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
{{-- <section class="parallax-bg-10 fixed-bg fashion-section" data-stellar-background-ratio="0.2">
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
</section> --}}
<!--=== Proposal Banner End ======-->
@endsection
