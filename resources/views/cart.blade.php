@extends('layouts.cart-layout')
@section('title', 'Cart - The best-selling individual books')
@section('content')
    <!--=== Products Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered shop-cart">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Item</th>
                                    <th>Book</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0; ?>
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        <?php $total += $details['price'] * $details['quantity']; ?>
                                        <tr class="cart_item">
                                            <td><a href="#" title="Remove this item"><i
                                                        class="icofont-close-circled"></i></a>
                                            </td>
                                            <td><a href="#"> <img src="{{ asset($details['photo']) }}" alt="">
                                                </a> </td>
                                            <td><a href="#"></a> </td>
                                            <td><span>${{ $details['price'] }}</span> </td>
                                            <td><input class="form-control" type="number" step="1" min="0"
                                                    value="{{ $details['quantity'] }}" title="Qty" placeholder="Qty">
                                            </td>
                                            <td class="product-subtotal">
                                                <span>${{ $details['price'] * $details['quantity'] }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="payment-box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="summary-cart">
                                            <h6 class="upper-case">Order Details</h6>
                                            <table class="order_table table-responsive table">
                                                <tbody>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td><span>$59.99</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td>
                                                            <h6><strong>$59.99</strong></h6>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="check-btns">
                                                <button class="btn btn-green btn-animate" type="button"><span>Update Cart
                                                        <i class="icofont icofont-refresh"></i></span></button>
                                                <button class="btn btn-color btn-animate" href="#"><span>Proceed to
                                                        Checkout <i class="icofont icofont-check"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-coupon">
                                            <h6 class="upper-case">Have a Coupon?</h6>
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Coupon code">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-color btn-animate" type="button"><span>Apply
                                                            Coupon <i class="icofont icofont-check"></i></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <div class="product-title"> <a href="#"
                                                class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i
                                                        class="mdi mdi-cart"></i></span></a> </div>
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
