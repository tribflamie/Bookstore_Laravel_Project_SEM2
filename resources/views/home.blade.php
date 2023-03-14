@extends('layouts.app')

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

    <!--=== Blogs Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="text-uppercase">Our Blogs</h2>
                    <h4 class="text-uppercase source-font">- Latest News -</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12 remove-padding">
                    <div class="owl-carousel blog-slider">
                        <div class="post">
                            <div class="post-img"> <img class="img-responsive" src="{{ asset('/images/post/post-01.jpg') }}"
                                    alt="" /> </div>
                            <div class="post-info">
                                <h3><a href="blog-grid.html">The best hidden gems of Washington State</a></h3>
                                <h6>April 28, 2017</h6>
                                <p>Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis
                                    pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                                <a class="readmore" href="#"><span>Read More</span></a>
                            </div>
                        </div>
                        <!--=== Post End ===-->
                        <div class="post">
                            <div class="post-img"> <img class="img-responsive" src="{{ asset('/images/post/post-02.jpg') }}"
                                    alt="" /> </div>
                            <div class="post-info">
                                <h3><a href="blog-grid.html">Top 10 Fastest Cars in the World</a></h3>
                                <h6>May 9, 2015</h6>
                                <p>Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis
                                    pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                                <a class="readmore" href="#"><span>Read More</span></a>
                            </div>
                        </div>
                        <!--=== Post End ===-->
                        <div class="post">
                            <div class="post-img"> <img class="img-responsive" src="{{ asset('/images/post/post-03.jpg') }}"
                                    alt="" /> </div>
                            <div class="post-info">
                                <h3><a href="blog-grid.html">The Perfect Music for the Perfect Party Mood</a></h3>
                                <h6>November 18, 2016</h6>
                                <p>Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis
                                    pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                                <a class="readmore" href="#"><span>Read More</span></a>
                            </div>
                        </div>
                        <!--=== Post End ===-->
                        <div class="post">
                            <div class="post-img"> <img class="img-responsive" src="{{ asset('/images/post/post-04.jpg') }}"
                                    alt="" /> </div>
                            <div class="post-info">
                                <h3><a href="blog-grid.html">Want to get an expert to write on your blog</a></h3>
                                <h6>Febaury 7, 2017</h6>
                                <p>Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis
                                    pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                                <a class="readmore" href="#"><span>Read More</span></a>
                            </div>
                        </div>
                        <!--=== Post End ===-->
                        <div class="post">
                            <div class="post-img"> <img class="img-responsive" src="{{ asset('/images/post/post-05.jpg') }}"
                                    alt="" /> </div>
                            <div class="post-info">
                                <h3><a href="blog-grid.html">Great things are not accomplished who yield</a></h3>
                                <h6>June 20, 2016</h6>
                                <p>Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis
                                    pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                                <a class="readmore" href="#"><span>Read More</span></a>
                            </div>
                        </div>
                        <!--=== Post End ===-->
                        <div class="post">
                            <div class="post-img"> <img class="img-responsive" src="{{ asset('/images/post/post-06.jpg') }}"
                                    alt="" /> </div>
                            <div class="post-info">
                                <h3><a href="blog-grid.html">You are free to choose what you want to make</a></h3>
                                <h6>July 30, 2014</h6>
                                <p>Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis
                                    pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                                <a class="readmore" href="#"><span>Read More</span></a>
                            </div>
                        </div>
                        <!--=== Post End ===-->
                        <div class="post">
                            <div class="post-img"> <img class="img-responsive" src="{{ asset('/images/post/post-07.jpg') }}"
                                    alt="" /> </div>
                            <div class="post-info">
                                <h3><a href="blog-grid.html">UX/UI Design & Website/App Design</a></h3>
                                <h6>September 25, 2016</h6>
                                <p>Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis
                                    pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                                <a class="readmore" href="#"><span>Read More</span></a>
                            </div>
                        </div>
                        <!--=== Post End ===-->
                        <div class="post">
                            <div class="post-img"> <img class="img-responsive" src="{{ asset('/images/post/post-08.jpg') }}"
                                    alt="" /> </div>
                            <div class="post-info">
                                <h3><a href="blog-grid.html">Marketing Campaigns & Content Creation</a></h3>
                                <h6>October 16, 2010</h6>
                                <p>Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis
                                    pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                                <a class="readmore" href="#"><span>Read More</span></a>
                            </div>
                        </div>
                        <!--=== Post End ===-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Blogs End ======-->

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
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-01.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD
                                                TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Short Sleeve Print T-Shirt</h4>
                            <p>11.61 <span class="old-price">$18.48</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-02.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD
                                                TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Short Sleeve Print T-Shirt</h4>
                            <p>$12.90 <span class="old-price">$18.48</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-03.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD
                                                TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Short Sleeve Round Neck T-Shirt</h4>
                            <p>$12.99 <span class="old-price">$16.46</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-04.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Long Sleeve Fox Print Cardigan</h4>
                            <p>$12.99 <span class="old-price">$32.26</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-05.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Navy Linen Short Sleeve Casual </h4>
                            <p>$30.00 <span class="old-price">$50.95</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-06.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Short Sleeve Print T-Shirt</h4>
                            <p>$12.75 <span class="old-price">$18.75</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-07.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Charcoal Wool Jacket</h4>
                            <p>$99.95 <span class="old-price">$80.95</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-08.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Sweater with Vented Design</h4>
                            <p>$10.32 <span class="old-price">$20.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-09.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Short Sleeve Print T-Shirt</h4>
                            <p>$12.65</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-10.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Short Sleeve Print T-Shirt</h4>
                            <p>$16.00 <span class="old-price">$18.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-11.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Casual Shirt</h4>
                            <p>$65.65</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-12.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Half Sleeve T-shirt</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                </div>
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
