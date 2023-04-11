@extends('layouts.layout-banner')
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
                        style="background:url({{ asset('images/background/home-banner0.jpg') }}) center center / cover scroll no-repeat;">
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

    <!--=== Banner Start ======-->
    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    @foreach ($categories as $category)
                        @if ($category->id == 1)
                            <div class="banner-box man-bg">
                                <div class="overlay-bg-dark">
                                    <div class="slide-img"
                                        style="background:url({{ asset($category->photo) }}) center center / cover scroll no-repeat;">
                                    </div>
                                </div>
                                <div class="relative white-color">
                                    <h2 class="text-uppercase font-700">{{ $category->categories }}</h2>
                                    <h4 class="cardo-font">Free Delivery on order over $100</h4>
                                    <a class="btn btn-white btn-square btn-animate mt-20"
                                        href="{{ url('products?sort=&categories=' . $category->id . '&countries=&published=') }}"><span>Buy
                                            Now <i class="icofont icofont-simple-right"></i></span></a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-6 col-sm-6">
                    @foreach ($categories as $category)
                        @if ($category->id == 2)
                            <div class="banner-box woman-bg">
                                <div class="overlay-bg-dark">
                                    <div class="slide-img"
                                        style="background:url({{ asset($category->photo) }}) center center / cover scroll no-repeat;">
                                    </div>
                                </div>
                                <div class="relative white-color">
                                    <h2 class="text-uppercase font-700">{{ $category->categories }}</h2>
                                    <h4 class="cardo-font">Free Delivery on order over $100</h4>
                                    <a class="btn btn-white btn-square btn-animate mt-20"
                                        href="{{ url('products?sort=&categories=' . $category->id . '&countries=&published=') }}"><span>Buy Now <i
                                                class="icofont icofont-simple-right"></i></span></a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    @foreach ($categories as $category)
                        @if ($category->id == 3)
                            <div class="banner-box man-bg">
                                <div class="overlay-bg-dark">
                                    <div class="slide-img"
                                        style="background:url({{ asset($category->photo) }}) center center / cover scroll no-repeat;">
                                    </div>
                                </div>
                                <div class="relative white-color">
                                    <h2 class="text-uppercase font-700">{{ $category->categories }}</h2>
                                    <h4 class="cardo-font">Free Delivery on order over $100</h4>
                                    <a class="btn btn-white btn-square btn-animate mt-20"
                                        href="{{ url('products?sort=&categories=' . $category->id . '&countries=&published=') }}"><span>Buy Now <i
                                                class="icofont icofont-simple-right"></i></span></a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-6 col-sm-6">
                    @foreach ($categories as $category)
                        @if ($category->id == 13)
                            <div class="banner-box woman-bg">
                                <div class="overlay-bg-dark">
                                    <div class="slide-img"
                                        style="background:url({{ asset($category->photo) }}) center center / cover scroll no-repeat;">
                                    </div>
                                </div>
                                <div class="relative white-color">
                                    <h2 class="text-uppercase font-700">{{ $category->categories }}</h2>
                                    <h4 class="cardo-font">Free Delivery on order over $100</h4>
                                    <a class="btn btn-white btn-square btn-animate mt-20"
                                        href="{{ url('products?sort=&categories=' . $category->id . '&countries=&published=') }}"><span>Buy Now <i
                                                class="icofont icofont-simple-right"></i></span></a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--=== Banner End ======-->

    <!--=== Blogs Start ======-->
    <section>
        <div class="container">
            <div class="row mt-50">
                <div class="col-md-12 remove-padding">
                    <ul id="portfolio-filter" class="list-inline filter-transparent text-center">
                        <li data-toggle="tab" href="#multiCollapse1">Top Discounts</li>
                        <li data-toggle="tab" href="#multiCollapse2">Top Ratings</li>
                        <li data-toggle="tab" href="#multiCollapse3">Best Sellers</li>
                    </ul>
                    <!-- Top Discounts -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="multiCollapse1">
                            <div class="owl-carousel blog-slider">
                                <?php $cnt = 0; ?>
                                @foreach ($topDiscount as $top)
                                    <div class="post">
                                        <div class="product-wrap"> <img height="400px" width="500px"
                                                src="{{ asset($top->photo) }}" class="img-responsive" alt="team-01">
                                            <div class="product-caption">
                                                <div class="product-description text-center">
                                                    <div class="product-description-wrap">
                                                        <div class="product-title"> <a
                                                                href="{{ route('add.to.cart', $top->id) }}"
                                                                class="btn btn-color btn-circle">ADD
                                                                TO CART <span class="icon"><i
                                                                        class="mdi mdi-cart"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <a href="{{ route('productDetail', $top->id) }}">
                                                <h4>{{ $top->name }}</h4>
                                            </a>
                                            <h5>${{ $top->price - $top->price * $top->discount }} <span
                                                    class="old-price">${{ $top->price }}</span></h5>
                                            <h5 class="grey">
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
                                                <!--đếm số lượng feedbacks trong product-->
                                                ({{ count($top->feedbacks) }})
                                            </h5>
                                            <?php $cnt++; ?>
                                        </div>
                                    </div>
                                    @if ($cnt >= 8)
                                    @break;
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- Top Rating -->
                    <div class="tab-pane" id="multiCollapse2">
                        <div class="owl-carousel blog-slider">
                            <?php $cnt = 0; ?>
                            @foreach ($topRating as $top)
                                <div class="post">
                                    <div class="product-wrap"> <img height="400px" width="500px"
                                            src="{{ asset($top->photo) }}" class="img-responsive" alt="team-01">
                                        <div class="product-caption">
                                            <div class="product-description text-center">
                                                <div class="product-description-wrap">
                                                    <div class="product-title"> <a
                                                            href="{{ route('add.to.cart', $top->id) }}"
                                                            class="btn btn-color btn-circle">ADD
                                                            TO CART <span class="icon"><i
                                                                    class="mdi mdi-cart"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a href="{{ route('productDetail', $top->id) }}">
                                            <h4>{{ $top->name }}</h4>
                                        </a>
                                        <h5>${{ $top->price - $top->price * $top->discount }} <span
                                                class="old-price">${{ $top->price }}</span></h5>
                                        <h5 class="grey">
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
                                            <!--đếm số lượng feedbacks trong product-->
                                            ({{ count($top->feedbacks) }})
                                        </h5>
                                        <?php $cnt++; ?>
                                    </div>
                                </div>
                                @if ($cnt >= 8)
                                @break;
                            @endif
                        @endforeach
                    </div>
                </div>
                  <!-- Top Selling -->
                  <div class="tab-pane" id="multiCollapse3">
                    <div class="owl-carousel blog-slider">
                        <?php $cnt = 0; ?>
                        @foreach ($topSelling as $top)
                            <div class="post">
                                <div class="product-wrap"> <img height="400px" width="500px"
                                        src="{{ asset($top->photo) }}" class="img-responsive" alt="team-01">
                                    <div class="product-caption">
                                        <div class="product-description text-center">
                                            <div class="product-description-wrap">
                                                <div class="product-title"> <a
                                                        href="{{ route('add.to.cart', $top->id) }}"
                                                        class="btn btn-color btn-circle">ADD
                                                        TO CART <span class="icon"><i
                                                                class="mdi mdi-cart"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a href="{{ route('productDetail', $top->id) }}">
                                        <h4>{{ $top->name }}</h4>
                                    </a>
                                    <h5>${{ $top->price - $top->price * $top->discount }} <span
                                            class="old-price">${{ $top->price }}</span></h5>
                                    <h5 class="grey">
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
                                        <!--đếm số lượng feedbacks trong product-->
                                        ({{ count($top->feedbacks) }})
                                    </h5>
                                    <?php $cnt++; ?>
                                </div>
                            </div>
                            @if ($cnt >= 8)
                            @break;
                        @endif
                    @endforeach
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--=== Blogs End ======-->

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
                    <div class="product-wrap"> <img src="{{ asset($top->photo) }}" class="img-responsive"
                            alt="team-01">
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
                            <h6>{{ $top->name }}</h6>
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
@endsection

@section('scripts')
<script type="text/javascript">
    window.onload = function() {
        document.getElementById("main").classList.add("loaded")

        lax.setup()

        const update = () => {
            lax.update(window.scrollY)
            window.requestAnimationFrame(update)
        }

        window.requestAnimationFrame(update)

        let w = window.innerWidth
        window.addEventListener("resize", function() {
            if (w !== window.innerWidth) {
                lax.updateElements()
            }
        });
    }
</script>
@endsection
