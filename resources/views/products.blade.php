@extends('layouts.layout-banner')
@section('title', 'Products - The best selling individual books')
@section('content')
    <!--=== page-title-section start ===-->
    <section class="title-hero-bg shop-cover-bg" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="slide-img"
                style="background:url({{ asset('images/background/home-banner10.jpg') }}) center center / cover scroll no-repeat;">
            </div>
            <div class="page-title text-center">
                <h1>Shop Standard</h1>
            </div>
        </div>
    </section>
    <!--=== page-title-section end ===-->

    <!--=== Products Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--=== Form Start ===-->
                    <form id="test" method="GET">
                        <div class="form-group">
                            <!--=== Sort ===-->
                            <select name="sort">
                                <option value="">Sort</option>
                                <option value="lastest">Latest</option>
                                <option value="oldest">Oldest</option>
                                <option value="a-z">Product Name: A to Z</option>
                                <option value="z-a">Product Name: Z to A</option>
                                <option value="highest">Price: Highest First</option>
                                <option value="lowest">Price: Lowest First</option>
                            </select>
                            <!--=== Categories ===-->
                            <select name="categories">
                                <option value="">Categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->categories }}</option>
                                @endforeach
                            </select>
                            <!--=== Countries ===-->
                            <select name="countries">
                                <option value="">Countries</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->country }}">{{ $country->country }}</option>
                                @endforeach
                            </select>
                            <!--=== Published ===-->
                            <select name="published">
                                <option value="">Years</option>
                                @foreach ($years as $year)
                                    <option value="{{ $year->published }}">{{ $year->published }}</option>
                                @endforeach
                            </select>
                            <!--=== Submit ===-->
                            <button type="submit">Filtered</button>
                        </div>
                    </form>
                    <!--=== End Form. ===-->

                    <!--=== Product Start ===-->
                    @foreach ($filter as $product)
                        <div class="col-md-6 col-sm-6">
                            <div class="product">
                                <div class="product-wrap"> <img src="{{ asset('/images/shop/' . $product->photo) }}"
                                        class="img-responsive" alt="team-01">
                                    <div class="product-caption">
                                        <div class="product-description text-center">
                                            <div class="product-description-wrap">
                                                <div class="product-title"> <a
                                                        href="{{ route('add.to.cart', $product->id) }}"
                                                        class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                                class="mdi mdi-cart"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a href="{{ route('productDetail', $product->id) }}">
                                        <h4>{{ $product->name }}</h4>
                                        <h5 class="grey">
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
                                        </h5>
                                    </a>
                                    <p>${{ $product->price - $product->price * $product->discount }} <span
                                            class="old-price">${{ $product->price }}</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div style="width:100%;clear:both;">
                        {{ $filter->withQueryString()->links() }}
                    </div>
                </div>
                <!--=== Product End ===-->
                <!--=== Left Side End===-->
                <div class="col-md-3 col-md-offset-1">
                    <div class="widget widget_about">
                        <h4 class="widget-title" style="margin-bottom: 10px">About Us</h4>
                        <p>Papyrus works to connect readers with independent booksellers all over the world. We believe
                            local bookstores are essential community hubs that foster culture, curiosity, and a love of
                            reading, and we're committed to helping them thrive.</p>
                    </div>
                    <div class="widget sidebar_widget">
                        <form class="search-form" method="GET">
                            <input type="text" name="search" class="form-control search-field"
                                placeholder="Name and Author">
                            <button type="submit" class="icofont icofont-search-1 search-submit"></button>
                        </form>
                    </div>
                    <div class="widget sidebar_widget widget_categories">
                        <h4 class="widget-title">Rating</h4>
                        <ul>
                            <li>
                                <a href="products?rating=5">
                                    <h4>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a class="nohover" href="products?rating=4">
                                    <h4 class="grey">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="products?rating=3">
                                    <h4 class="grey">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="products?rating=2">
                                    <h4 class="grey">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="products?rating=1">
                                    <h4 class="grey">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget sidebar_widget widget_categories">
                        <h4 class="widget-title">Top 5 Best Sellers</h4>
                        <ul>
                            @foreach ($topSelling as $top)
                                <li><a href="product-detail/{{ $top->id }}">{{ $top->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget sidebar_widget widget_categories">
                        <h4 class="widget-title">Top 5 Discounts</h4>
                        <ul>
                            @foreach ($topDiscount as $top)
                                <li><a href="product-detail/{{ $top->id }}">{{ $top->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--=== Right Side End ===-->
            </div>
        </div>
    </section>
    <!--=== Products End ======-->
@endsection
