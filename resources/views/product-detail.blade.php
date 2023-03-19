@extends('layouts.cart-layout')
@section('title', 'Product Detail - The best-selling individual books')
@section('content')
    <!--=== Products Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-slider flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset($product->photo) }}"> <img
                                    src="{{ asset('images/shop/single-product-01.jpg') }}" class="img-responsive"
                                    alt="single-product" /> </li>
                            <li data-thumb="{{ asset('images/shop/single-product-02.jpg') }}"> <img
                                    src="{{ asset('images/shop/single-product-02.jpg') }}" class="img-responsive"
                                    alt="single-product" /> </li>
                            <li data-thumb="{{ asset('images/shop/single-product-03.jpg') }}"> <img
                                    src="{{ asset('images/shop/single-product-03.jpg') }}" class="img-responsive"
                                    alt="single-product" /> </li>
                            <li data-thumb="{{ asset('images/shop/single-product-04.jpg') }}"> <img
                                    src="{{ asset('images/shop/single-product-04.jpg') }}" class="img-responsive"
                                    alt="single-product" /> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>{{ $product->book }}</h2>
                    <h3 class="grey">{{ $product->price * (1 - $product->discount) }} <span
                            class="old-price font-18px">{{ $product->price }}</span></h3>
                    <div class="single-product-des">
                        <h5>Product Desription</h5>
                        <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Praesent vitae odio
                            ullamcorper, accumsan felis vitae, commodo diam. Proin facilisis iaculis ipsum, non consectetur
                            urna egestas nec. Nulla facilisi. Aliquam erat volutpat. Nam aliquet tellus nec augue auctor
                            maximus. </p>
                    </div>
                    <div class="single-product-qty">
                        <form>
                            <input type="number" step="1" min="1" name="quantity" value="1"
                                title="Qty" class="input-text qty text" size="4">
                            <span class="input-group-btn"><a href="#" class="btn btn-dark">ADD TO CART <i
                                        class="icofont icofont-cart"></i></a></span>
                        </form>
                    </div>
                    <div class="product-fabric-detail">
                        <h5>Product Fabric</h5>
                        <p>100% Cotton Single jersey
                            Prewashed to impart a softer texture</p>
                        <h5>WashCare Instructions</h5>
                        <p>Machine wash cold Do not bleach or wash with chlorine based detergent or water Wash/dry inside
                            out Do not iron directly on prints Dry promptly in shade
                            Dry on a flat surface as hanging may cause measurement variations Product color may vary little
                            due to photography Wash with similar clothes.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{{ asset('images/shop/product-01.jpg') }}"
                                class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#" class="btn btn-color btn-circle">ADD
                                                TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Jet Black/White Sports Trim</h4>
                            <p>$85.99 <span class="old-price">$104.99</span></p>
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
                                        <div class="product-title"> <a href="#" class="btn btn-color btn-circle">ADD
                                                TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Jet Black/ T-shirt</h4>
                            <p>$59.99 <span class="old-price">$79.99</span></p>
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
                                        <div class="product-title"> <a href="#" class="btn btn-color btn-circle">ADD
                                                TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Navy Blue Plain</h4>
                            <p>$59.99 <span class="old-price">$79.99</span></p>
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
                                        <div class="product-title"> <a href="#" class="btn btn-color btn-circle">ADD
                                                TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Just Let Me Sleep</h4>
                            <p>$195.99 <span class="old-price">$230.99</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Products End ======-->
@endsection
