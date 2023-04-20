@extends('layouts.layout-no-banner')
@section('title', 'Product Detail - The best-selling individual books')
@section('links')
    <link rel="stylesheet" href="{{ asset('/css/comment-section.css') }}">
@endsection
@section('content')
    <!--=== Products Start ======-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-slider flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset('/images/shop/' . $product->photo) }}"> <img
                                    src="{{ asset('/images/shop/' . $product->photo) }}" class="img-responsive"
                                    alt="single-product" /> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>{{ $product->name }}</h2>
                    <h3 class="grey">
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
                    </h3>
                    <h4 class="grey"><span class="old-price font-18px">${{ $product->price }} </span>
                        {{ $product->discount * 100 }}%
                    </h4>
                    <h3>
                        ${{ $product->price * (1 - $product->discount) }}
                    </h3>
                    <div class="product-fabric-detail">
                        <div class="single-product-qty">
                            <form>
                                <span class="input-group-btn"><a href="{{ route('add.to.cart', $product->id) }}"
                                        class="btn btn-dark">ADD TO CART <i class="icofont icofont-cart"></i></a></span>
                            </form>
                        </div>
                        <div class="product-fabric-detail">
                            <h5>Category: </h5>
                            <p>{{ $product->categories->categories }}</p>
                            <h5>Author: </h5>
                            <p>{{ $product->author }}</p>
                            <h5>Published year:</h5>
                            <p>{{ $product->published }}</p>
                            <h5>Country:</h5>
                            <p>{{ $product->country }}</p>
                            <h5>Product Description</h5>
                            <p>{{ $product->description }}</p>
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
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="comments">
                                    <ul class="media-list">
                                        @foreach ($feedbacks as $feedback)
                                            @if ($feedback->products_id == $product->id)
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="profile img-circle"
                                                            src="{{ asset('images/team/' . $feedback->user->photo) }}"
                                                            alt="profile">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="well well-lg">
                                                            <h4 class="media-heading text-uppercase reviews">
                                                                {{ $feedback->user->name }}
                                                            </h4>
                                                            <p class="media-date text-uppercase reviews list-inline">
                                                                {{ $feedback->created_at }}
                                                            </p>
                                                            <p class="grey">
                                                                <?php
                                                                $count = 0;
                                                                //xuất số sao vàng làm tròn trung bình rating trong bảng feedback
                                                                for ($count = 1; $count <= $feedback->rating; $count++):
                                                                    echo '<span class="fa fa-star checked"></span>';
                                                                endfor;
                                                                //xuất số sao đen còn lại
                                                                for (; $count <= 5; $count++):
                                                                    echo '<span class="fa fa-star"></span>';
                                                                endfor;
                                                                ?>
                                                            </p>
                                                            <p class="media-comment">
                                                                {{ $feedback->description }}
                                                            </p>
                                                            <a class="btn btn-info btn-circle text-uppercase"
                                                                data-toggle="collapse" href="#reply{{ $feedback->id }}">
                                                                Reply</a>
                                                            <a class="btn btn-warning btn-circle text-uppercase"
                                                                data-toggle="collapse" href="#{{ $feedback->id }}">
                                                                {{ count($feedback->replies) }} comments</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="reply{{ $feedback->id }}">
                                                        <ul class="media-list">
                                                            <li class="media media-replied">
                                                                <a class="pull-left" href="#">
                                                                    @if (Auth::user()->photo == null)
                                                                        <img class="profile img-circle"
                                                                            src="{{ asset('images/team/avatar-1.jpg') }}"
                                                                            alt="profile">
                                                                    @else
                                                                        <img class="profile img-circle"
                                                                            src="{{ asset('images/team/' . Auth::user()->photo) }}"
                                                                            alt="profile">
                                                                    @endif
                                                                </a>
                                                                <div class="media-body">
                                                                    <form action="/reply/{{ $feedback->id }}"
                                                                        method="POST">
                                                                        @csrf

                                                                        <input type="text"
                                                                            class="well well-lg full-width" name="reply">
                                                                        <button
                                                                            class="btn btn-warning btn-circle text-uppercase">Send</button>
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="collapse" id="{{ $feedback->id }}">
                                                        <ul class="media-list">
                                                            @foreach ($replies as $reply)
                                                                @if ($reply->feedbacks_id == $feedback->id)
                                                                    <li class="media media-replied">
                                                                        <a class="pull-left" href="#">
                                                                            <img class="profile img-circle"
                                                                                src="{{ asset('images/team/' . $reply->user->photo) }}"
                                                                                alt="profile">
                                                                        </a>
                                                                        <div class="media-body">
                                                                            <div class="well well-lg">
                                                                                <h4
                                                                                    class="media-heading text-uppercase reviews">
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
                                            @if ($feedback->products_id == $product->id)
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="profile img-circle"
                                                            src="{{ asset('images/team/' . $feedback->user->photo) }}"
                                                            alt="profile">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="well well-lg">
                                                            <h4 class="media-heading text-uppercase reviews">
                                                                {{ $feedback->user->name }}
                                                            </h4>
                                                            <p class="media-date text-uppercase reviews list-inline">
                                                                {{ $feedback->created_at }}
                                                            </p>
                                                            <p class="grey">
                                                                <?php
                                                                $count = 0;
                                                                //xuất số sao vàng làm tròn trung bình rating trong bảng feedback
                                                                for ($count = 1; $count <= $feedback->rating; $count++):
                                                                    echo '<span class="fa fa-star checked"></span>';
                                                                endfor;
                                                                //xuất số sao đen còn lại
                                                                for (; $count <= 5; $count++):
                                                                    echo '<span class="fa fa-star"></span>';
                                                                endfor;
                                                                ?>
                                                            </p>
                                                            <p class="media-comment">
                                                                {{ $feedback->description }}
                                                            </p>
                                                            <a class="btn btn-info btn-circle text-uppercase"
                                                                data-toggle="collapse" href="#rep{{ $feedback->id }}">
                                                                Reply</a>
                                                            <a class="btn btn-warning btn-circle text-uppercase"
                                                                data-toggle="collapse" href="#com{{ $feedback->id }}">
                                                                {{ count($feedback->replies) }} comments</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="rep{{ $feedback->id }}">
                                                        <ul class="media-list">
                                                            <li class="media media-replied">
                                                                <a class="pull-left" href="#">
                                                                    @if (Auth::user()->photo == null)
                                                                        <img class="profile img-circle"
                                                                            src="{{ asset('images/team/avatar-1.jpg') }}"
                                                                            alt="profile">
                                                                    @else
                                                                        <img class="profile img-circle"
                                                                            src="{{ asset('images/team/' . Auth::user()->photo) }}"
                                                                            alt="profile">
                                                                    @endif
                                                                </a>
                                                                <div class="media-body">
                                                                    <form action="/reply/{{ $feedback->id }}"
                                                                        method="POST">
                                                                        @csrf

                                                                        <input type="text"
                                                                            class="well well-lg full-width"
                                                                            name="reply">
                                                                        <button
                                                                            class="btn btn-warning btn-circle text-uppercase">Send</button>
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="collapse" id="com{{ $feedback->id }}">
                                                        <ul class="media-list">
                                                            @foreach ($replies as $reply)
                                                                @if ($reply->feedbacks_id == $feedback->id)
                                                                    <li class="media media-replied">
                                                                        <a class="pull-left" href="#">
                                                                            <img class="profile img-circle"
                                                                                src="{{ asset('images/team/' . $reply->user->photo) }}"
                                                                                alt="profile">
                                                                        </a>
                                                                        <div class="media-body">
                                                                            <div class="well well-lg">
                                                                                <h4
                                                                                    class="media-heading text-uppercase reviews">
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
                    @foreach ($topNewest as $top)
                        <div class="col-md-3 col-sm-6">
                            <div class="product">
                                <div class="product-wrap"> <img src="{{ asset('/images/shop/' . $top->photo) }}"
                                        class="img-responsive" alt="team-01">
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
                </div>
    </section>
    <!--=== Products End ======-->
@endsection
