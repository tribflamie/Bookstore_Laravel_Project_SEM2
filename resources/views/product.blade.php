@extends('layouts.home-layout')
@section('title', 'Product - The best selling individual books')
@section('content')
    <!--=== page-title-section start ===-->
  <section class="title-hero-bg shop-cover-bg" data-stellar-background-ratio="0.2">
    <div class="container">
        @foreach ($category as $cate)
        <div class="slide-img"
        style="background:url({{ asset($cate->photo) }}) center center / cover scroll no-repeat;">
        </div>
      <div class="page-title text-center">
        <h1>{{ $cate->categories }}</h1>
      </div>
        @endforeach
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
        <!--=== Left Side End===-->
        <div class="col-md-3 col-md-offset-1">
          <div class="widget widget_about">
            <h4 class="widget-title">About</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat.</p>
          </div>
          <div class="widget sidebar_widget">
            <form class="search-form" method="get">
              <input type="text" name="name" class="form-control search-field" id="search" placeholder="Type what it's your mind...">
              <button type="submit" class="icofont icofont-search-1 search-submit"></button>
            </form>
          </div>
          <div class="widget sidebar_widget widget_categories">
            <h4 class="widget-title">Categories</h4>
            <ul>
              <li> <a href="#">Men</a> </li>
              <li> <a href="#">Women</a> </li>
              <li> <a href="#">Accessories</a> </li>
              <li> <a href="#">Clothing</a> </li>
              <li> <a href="#">T-shirts</a> </li>
            </ul>
          </div>
          <div class="widget sidebar_widget widget_tag_cloud">
            <h4 class="widget-title">Tags</h4>
            <div class="post-tags"> <a href="#">Dress</a> <a href="#">Fashion</a> <a href="#">T-Shirts</a> <a href="#">Pants</a> <a href="#">Suits</a> <a href="#">Casual</a> </div>
          </div>
        </div>
        <!--=== Right Side End ===-->
      </div>
    </div>
  </section>
  <!--=== Products End ======-->
@endsection
