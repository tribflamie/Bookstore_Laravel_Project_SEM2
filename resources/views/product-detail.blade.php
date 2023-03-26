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
                            <li class="active"><a href="#comments" role="tab" data-toggle="tab">
                                    <h4 class="reviews text-capitalize">({{ count($product->feedbacks) }})
                                        Comments</h4>
                                </a></li>
                            <li><a href="#lastest" role="tab" data-toggle="tab">
                                    <h4 class="reviews text-capitalize">({{ count($product->feedbacks) }}) Lastest</h4>
                                </a></li>
                            <li><a href="#5" role="tab" data-toggle="tab">
                                    <h4 class="reviews text-capitalize">
                                        ({{ count($product->feedbacks->where('rating', 5)) }}) 5 Stars</h4>
                                </a></li>
                            <li><a href="#4" role="tab" data-toggle="tab">
                                    <h4 class="reviews text-capitalize">
                                        ({{ count($product->feedbacks->where('rating', 4)) }}) 4 Stars</h4>
                                </a></li>
                            <li><a href="#3" role="tab" data-toggle="tab">
                                    <h4 class="reviews text-capitalize">
                                        ({{ count($product->feedbacks->where('rating', 3)) }}) 3 Stars</h4>
                                </a></li>
                            <li><a href="#2" role="tab" data-toggle="tab">
                                    <h4 class="reviews text-capitalize">
                                        ({{ count($product->feedbacks->where('rating', 2)) }}) 2 Stars</h4>
                                </a></li>
                            <li><a href="#1" role="tab" data-toggle="tab">
                                    <h4 class="reviews text-capitalize">
                                        ({{ count($product->feedbacks->where('rating', 1)) }}) 1 Stars</h4>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="comments">
                                <ul class="media-list">
                                    @foreach ($feedbacks as $feedbacks)
                                        @if ($feedbacks->product_id == $product->id)
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle"
                                                        src="{{ asset('images/team/avatar-1.jpg') }}" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                    <div class="well well-lg">
                                                        <h4 class="media-heading text-uppercase reviews">
                                                            {{ $feedbacks->user->name }}
                                                        </h4>
                                                        <p class="media-date text-uppercase reviews list-inline">
                                                            {{ $feedbacks->created_at }}
                                                        </p>
                                                        <p class="media-comment">
                                                            {{ $feedbacks->description }}
                                                        </p>

                                                        <a class="btn btn-info btn-circle text-uppercase" href="#"
                                                            id="reply"><span
                                                                class="glyphicon glyphicon-share-alt"></span>
                                                            Reply</a>
                                                        <a class="btn btn-warning btn-circle text-uppercase"
                                                            data-toggle="collapse" href="#{{ $feedbacks->id }}"><span
                                                                class="glyphicon glyphicon-comment"></span>
                                                            {{ count($feedbacks->replies) }} comments</a>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="{{ $feedbacks->id }}">
                                                    <ul class="media-list">
                                                        @foreach ($replies as $reply)
                                                            @if ($reply->feedbacks_id == $feedbacks->id)
                                                                <li class="media media-replied">
                                                                    <a class="pull-left" href="#">
                                                                        <img class="media-object img-circle"
                                                                            src="{{ asset('images/team/avatar-1.jpg') }}"
                                                                            alt="profile">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="well well-lg">
                                                                            <h4
                                                                                class="media-heading text-uppercase reviews">
                                                                                <span
                                                                                    class="glyphicon glyphicon-share-alt"></span>
                                                                                {{ $reply->user->name }}
                                                                            </h4>
                                                                            <p
                                                                                class="media-date text-uppercase reviews list-inline">
                                                                                {{ $reply->created_at }}
                                                                            </p>
                                                                            <p class="media-comment">
                                                                                {{ $reply->description }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="lastest">
                                <ul class="media-list">
                                    @foreach ($lastest as $feedback)
                                        @if ($feedback->product_id == $product->id)
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle"
                                                        src="{{ asset('images/team/avatar-1.jpg') }}" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                    <div class="well well-lg">
                                                        <h4 class="media-heading text-uppercase reviews">
                                                            {{ $feedback->user->name }}
                                                        </h4>
                                                        <p class="media-date text-uppercase reviews list-inline">
                                                            {{ $feedback->created_at }}
                                                        </p>
                                                        <p class="media-comment">
                                                            {{ $feedback->description }}
                                                        </p>

                                                        <a class="btn btn-info btn-circle text-uppercase" href="#"
                                                            id="reply"><span
                                                                class="glyphicon glyphicon-share-alt"></span>
                                                            Reply</a>
                                                        <a class="btn btn-warning btn-circle text-uppercase"
                                                            data-toggle="collapse" href="#{{ $feedback->id }}"><span
                                                                class="glyphicon glyphicon-comment"></span>
                                                            {{ count($feedback->replies) }} comments</a>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="{{ $feedback->id }}">
                                                    <ul class="media-list">
                                                        @foreach ($replies as $reply)
                                                            @if ($reply->feedbacks_id == $feedback->id)
                                                                <li class="media media-replied">
                                                                    <a class="pull-left" href="#">
                                                                        <img class="media-object img-circle"
                                                                            src="{{ asset('images/team/avatar-1.jpg') }}"
                                                                            alt="profile">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="well well-lg">
                                                                            <h4
                                                                                class="media-heading text-uppercase reviews">
                                                                                <span
                                                                                    class="glyphicon glyphicon-share-alt"></span>
                                                                                {{ $reply->user->name }}
                                                                            </h4>
                                                                            <p
                                                                                class="media-date text-uppercase reviews list-inline">
                                                                                {{ $reply->created_at }}
                                                                            </p>
                                                                            <p class="media-comment">
                                                                                {{ $reply->description }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="5">
                                <ul class="media-list">
                                    @foreach ($stars5 as $feedback)
                                        @if ($feedback->product_id == $product->id)
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle"
                                                        src="{{ asset('images/team/avatar-1.jpg') }}" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                    <div class="well well-lg">
                                                        <h4 class="media-heading text-uppercase reviews">
                                                            {{ $feedback->user->name }}
                                                        </h4>
                                                        <p class="media-date text-uppercase reviews list-inline">
                                                            {{ $feedback->created_at }}
                                                        </p>
                                                        <p class="media-comment">
                                                            {{ $feedback->description }}
                                                        </p>

                                                        <a class="btn btn-info btn-circle text-uppercase" href="#"
                                                            id="reply"><span
                                                                class="glyphicon glyphicon-share-alt"></span>
                                                            Reply</a>
                                                        <a class="btn btn-warning btn-circle text-uppercase"
                                                            data-toggle="collapse" href="#{{ $feedback->id }}"><span
                                                                class="glyphicon glyphicon-comment"></span>
                                                            {{ count($feedback->replies) }} comments</a>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="{{ $feedback->id }}">
                                                    <ul class="media-list">
                                                        @foreach ($replies as $reply)
                                                            @if ($reply->feedbacks_id == $feedback->id)
                                                                <li class="media media-replied">
                                                                    <a class="pull-left" href="#">
                                                                        <img class="media-object img-circle"
                                                                            src="{{ asset('images/team/avatar-1.jpg') }}"
                                                                            alt="profile">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="well well-lg">
                                                                            <h4
                                                                                class="media-heading text-uppercase reviews">
                                                                                <span
                                                                                    class="glyphicon glyphicon-share-alt"></span>
                                                                                {{ $reply->user->name }}
                                                                            </h4>
                                                                            <p
                                                                                class="media-date text-uppercase reviews list-inline">
                                                                                {{ $reply->created_at }}
                                                                            </p>
                                                                            <p class="media-comment">
                                                                                {{ $reply->description }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="4">
                                <ul class="media-list">
                                    @foreach ($stars4 as $feedback)
                                        @if ($feedback->product_id == $product->id)
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle"
                                                        src="{{ asset('images/team/avatar-1.jpg') }}" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                    <div class="well well-lg">
                                                        <h4 class="media-heading text-uppercase reviews">
                                                            {{ $feedback->user->name }}
                                                        </h4>
                                                        <p class="media-date text-uppercase reviews list-inline">
                                                            {{ $feedback->created_at }}
                                                        </p>
                                                        <p class="media-comment">
                                                            {{ $feedback->description }}
                                                        </p>

                                                        <a class="btn btn-info btn-circle text-uppercase" href="#"
                                                            id="reply"><span
                                                                class="glyphicon glyphicon-share-alt"></span>
                                                            Reply</a>
                                                        <a class="btn btn-warning btn-circle text-uppercase"
                                                            data-toggle="collapse" href="#{{ $feedback->id }}"><span
                                                                class="glyphicon glyphicon-comment"></span>
                                                            {{ count($feedback->replies) }} comments</a>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="{{ $feedback->id }}">
                                                    <ul class="media-list">
                                                        @foreach ($replies as $reply)
                                                            @if ($reply->feedbacks_id == $feedback->id)
                                                                <li class="media media-replied">
                                                                    <a class="pull-left" href="#">
                                                                        <img class="media-object img-circle"
                                                                            src="{{ asset('images/team/avatar-1.jpg') }}"
                                                                            alt="profile">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="well well-lg">
                                                                            <h4
                                                                                class="media-heading text-uppercase reviews">
                                                                                <span
                                                                                    class="glyphicon glyphicon-share-alt"></span>
                                                                                {{ $reply->user->name }}
                                                                            </h4>
                                                                            <p
                                                                                class="media-date text-uppercase reviews list-inline">
                                                                                {{ $reply->created_at }}
                                                                            </p>
                                                                            <p class="media-comment">
                                                                                {{ $reply->description }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="3">
                                <ul class="media-list">
                                    @foreach ($stars3 as $feedback)
                                        @if ($feedback->product_id == $product->id)
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle"
                                                        src="{{ asset('images/team/avatar-1.jpg') }}" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                    <div class="well well-lg">
                                                        <h4 class="media-heading text-uppercase reviews">
                                                            {{ $feedback->user->name }}
                                                        </h4>
                                                        <p class="media-date text-uppercase reviews list-inline">
                                                            {{ $feedback->created_at }}
                                                        </p>
                                                        <p class="media-comment">
                                                            {{ $feedback->description }}
                                                        </p>

                                                        <a class="btn btn-info btn-circle text-uppercase" href="#"
                                                            id="reply"><span
                                                                class="glyphicon glyphicon-share-alt"></span>
                                                            Reply</a>
                                                        <a class="btn btn-warning btn-circle text-uppercase"
                                                            data-toggle="collapse" href="#{{ $feedback->id }}"><span
                                                                class="glyphicon glyphicon-comment"></span>
                                                            {{ count($feedback->replies) }} comments</a>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="{{ $feedback->id }}">
                                                    <ul class="media-list">
                                                        @foreach ($replies as $reply)
                                                            @if ($reply->feedbacks_id == $feedback->id)
                                                                <li class="media media-replied">
                                                                    <a class="pull-left" href="#">
                                                                        <img class="media-object img-circle"
                                                                            src="{{ asset('images/team/avatar-1.jpg') }}"
                                                                            alt="profile">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="well well-lg">
                                                                            <h4
                                                                                class="media-heading text-uppercase reviews">
                                                                                <span
                                                                                    class="glyphicon glyphicon-share-alt"></span>
                                                                                {{ $reply->user->name }}
                                                                            </h4>
                                                                            <p
                                                                                class="media-date text-uppercase reviews list-inline">
                                                                                {{ $reply->created_at }}
                                                                            </p>
                                                                            <p class="media-comment">
                                                                                {{ $reply->description }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="2">
                                <ul class="media-list">
                                    @foreach ($stars2 as $feedback)
                                        @if ($feedback->product_id == $product->id)
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle"
                                                        src="{{ asset('images/team/avatar-1.jpg') }}" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                    <div class="well well-lg">
                                                        <h4 class="media-heading text-uppercase reviews">
                                                            {{ $feedback->user->name }}
                                                        </h4>
                                                        <p class="media-date text-uppercase reviews list-inline">
                                                            {{ $feedback->created_at }}
                                                        </p>
                                                        <p class="media-comment">
                                                            {{ $feedback->description }}
                                                        </p>

                                                        <a class="btn btn-info btn-circle text-uppercase" href="#"
                                                            id="reply"><span
                                                                class="glyphicon glyphicon-share-alt"></span>
                                                            Reply</a>
                                                        <a class="btn btn-warning btn-circle text-uppercase"
                                                            data-toggle="collapse" href="#{{ $feedback->id }}"><span
                                                                class="glyphicon glyphicon-comment"></span>
                                                            {{ count($feedback->replies) }} comments</a>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="{{ $feedback->id }}">
                                                    <ul class="media-list">
                                                        @foreach ($replies as $reply)
                                                            @if ($reply->feedbacks_id == $feedback->id)
                                                                <li class="media media-replied">
                                                                    <a class="pull-left" href="#">
                                                                        <img class="media-object img-circle"
                                                                            src="{{ asset('images/team/avatar-1.jpg') }}"
                                                                            alt="profile">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="well well-lg">
                                                                            <h4
                                                                                class="media-heading text-uppercase reviews">
                                                                                <span
                                                                                    class="glyphicon glyphicon-share-alt"></span>
                                                                                {{ $reply->user->name }}
                                                                            </h4>
                                                                            <p
                                                                                class="media-date text-uppercase reviews list-inline">
                                                                                {{ $reply->created_at }}
                                                                            </p>
                                                                            <p class="media-comment">
                                                                                {{ $reply->description }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="1">
                                <ul class="media-list">
                                    @foreach ($stars1 as $feedback)
                                        @if ($feedback->product_id == $product->id)
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle"
                                                        src="{{ asset('images/team/avatar-1.jpg') }}" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                    <div class="well well-lg">
                                                        <h4 class="media-heading text-uppercase reviews">
                                                            {{ $feedback->user->name }}
                                                        </h4>
                                                        <p class="media-date text-uppercase reviews list-inline">
                                                            {{ $feedback->created_at }}
                                                        </p>
                                                        <p class="media-comment">
                                                            {{ $feedback->description }}
                                                        </p>

                                                        <a class="btn btn-info btn-circle text-uppercase" href="#"
                                                            id="reply"><span
                                                                class="glyphicon glyphicon-share-alt"></span>
                                                            Reply</a>
                                                        <a class="btn btn-warning btn-circle text-uppercase"
                                                            data-toggle="collapse" href="#{{ $feedback->id }}"><span
                                                                class="glyphicon glyphicon-comment"></span>
                                                            {{ count($feedback->replies) }} comments</a>
                                                    </div>
                                                </div>
                                                <div class="collapse" id="{{ $feedback->id }}">
                                                    <ul class="media-list">
                                                        @foreach ($replies as $reply)
                                                            @if ($reply->feedbacks_id == $feedback->id)
                                                                <li class="media media-replied">
                                                                    <a class="pull-left" href="#">
                                                                        <img class="media-object img-circle"
                                                                            src="{{ asset('images/team/avatar-1.jpg') }}"
                                                                            alt="profile">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="well well-lg">
                                                                            <h4
                                                                                class="media-heading text-uppercase reviews">
                                                                                <span
                                                                                    class="glyphicon glyphicon-share-alt"></span>
                                                                                {{ $reply->user->name }}
                                                                            </h4>
                                                                            <p
                                                                                class="media-date text-uppercase reviews list-inline">
                                                                                {{ $reply->created_at }}
                                                                            </p>
                                                                            <p class="media-comment">
                                                                                {{ $reply->description }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
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
