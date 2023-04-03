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
        @foreach ($products as $product)
          <div class="col-md-6 col-sm-6">
            <div class="product">
              <div class="product-wrap"> <img src="{{ asset($product->photo) }}" class="img-responsive" alt="team-01">
                <div class="product-caption">
                  <div class="product-description text-center">
                    <div class="product-description-wrap">
                      <div class="product-title"> <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a> </div>
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
          <div class="row">
            <div class="col-md-12">
              <div class="clearfix">
                <ul class="pagination">
                  {{ $products->links() }}
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--=== Left Side End===-->
        <div class="col-md-3 col-md-offset-1">
          <div class="widget widget_about">
            <h4 class="widget-title" style="margin-bottom: 10px">About Us</h4>
            <p>Papyrus works to connect readers with independent booksellers all over the world. We believe local bookstores are essential community hubs that foster culture, curiosity, and a love of reading, and we're committed to helping them thrive.</p>
          </div>
          <div class="widget sidebar_widget">
            <form class="search-form" action="{{ route('products') }}" method="get">
              <input type="text" name="search" class="form-control search-field" id="search" placeholder="Type what it's your mind...">
              <button type="submit" class="icofont icofont-search-1 search-submit"></button>
            </form>
          </div>
          <div class="widget sidebar_widget widget_categories">
            <h4 class="widget-title">Categories</h4>
            @foreach($categories as $cate)
            <ul>
              <li> <a href="{{ route('product', $cate->id) }}">{{ $cate->categories }}</a> </li>
            </ul>
            @endforeach
          </div>
        </div>
        <!--=== Right Side End ===-->
      </div>
    </div>
  </section>
  <!--=== Products End ======-->
@endsection