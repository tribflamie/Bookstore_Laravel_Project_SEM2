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
                            <li data-thumb="{{ asset($product->photo) }}"> <img src="{{ asset($product->photo) }}"
                                    class="img-responsive" alt="single-product" /> </li>
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
                    <h2>{{ $product->name }}</h2>
                    <h3 class="grey">{{ $product->price * (1 - $product->discount) }} <span
                            class="old-price font-18px">{{ $product->price }}</span></h3>
                    <div class="single-product-des">
                        <h5>Product Desription</h5>
                        <p>{{ $product->description }}</p>
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
            <div class="container">
                <div class="row mt-50">
                    <div class="page-header">
                        <h3 class="reviews">Leave your comment</h3>
                    </div>
                    <div class="comment-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab">
                                    <h4 class="reviews text-capitalize">Comments</h4>
                                </a></li>
                            <li><a href="#account-settings" role="tab" data-toggle="tab">
                                    <h4 class="reviews text-capitalize">Update Profile</h4>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="comments-logout">
                                <ul class="media-list">
                                    @foreach ($users as $user)
                                        @foreach ($user->feedbacks as $feedback)
                                            @if ($feedback->products_id == $product->id)
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object img-circle"
                                                            src="{{ asset('images/team/avatar-1.jpg') }}" alt="profile">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="well well-lg">
                                                            <h4 class="media-heading text-uppercase reviews">
                                                                {{ $user->name }}
                                                            </h4>
                                                            <p class="media-date text-uppercase reviews list-inline">
                                                                {{ $feedback->created_at }}
                                                            </p>
                                                            <p class="media-comment">
                                                                {{ $feedback->comment }}
                                                            </p>

                                                            <a class="btn btn-info btn-circle text-uppercase" href="#"
                                                                id="reply"><span
                                                                    class="glyphicon glyphicon-share-alt"></span>
                                                                Reply</a>
                                                            <a class="btn btn-warning btn-circle text-uppercase"
                                                                data-toggle="collapse" href="#replyOne"><span
                                                                    class="glyphicon glyphicon-comment"></span> 2
                                                                comments</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @break
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane" id="account-settings">
                            <form action="#" method="post" class="form-horizontal" id="accountSetForm"
                                role="form">
                                <div class="form-group">
                                    <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                                    <div class="col-sm-10">
                                        <div class="custom-input-file">
                                            <label class="uploadPhoto">
                                                Edit
                                                <input type="file" class="change-avatar" name="avatar"
                                                    id="avatar">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Vilma palma">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nickName" class="col-sm-2 control-label">Nick name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nickName" id="nickName"
                                            placeholder="Vilma">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="vilma@mail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="newPassword" class="col-sm-2 control-label">New password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="newPassword"
                                            id="newPassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword" class="col-sm-2 control-label">Confirm
                                        password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="confirmPassword"
                                            id="confirmPassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-primary btn-circle text-uppercase" type="submit"
                                            id="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
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
                                    <div class="product-title"> <a href="#"
                                            class="btn btn-color btn-circle">ADD
                                            TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                    </div>
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
                                    <div class="product-title"> <a href="#"
                                            class="btn btn-color btn-circle">ADD
                                            TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                    </div>
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
                                    <div class="product-title"> <a href="#"
                                            class="btn btn-color btn-circle">ADD
                                            TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a>
                                    </div>
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
                                            class="btn btn-color btn-circle">ADD
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
