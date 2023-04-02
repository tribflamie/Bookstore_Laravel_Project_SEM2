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
                                    <th>#</th>
                                    <th>Book</th>
                                    <th>Name</th>
                                    <th>Author</th>
                                    <th>Unit Price</th>
                                    <th>Quantity</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sum=0;$quantity=0;?>
                                <?php use App\Models\Product; ?>
                                @if (session('orderDetails'))
                                    <?php $orderDetails=session()->get('orderDetails');?>
                                    @foreach ($orderDetails as $id => $order)
                                    <?php
                                        $product = Product::find($order->products_id);
                                    ?>
                                        <tr data-id="{{ $id }}" class="order">
                                            <td>{{ $id+1 }}</td>
                                            <td><img src="{{ asset($product->photo) }}"></td>
                                            <td>{{$product->name}} </td>
                                            <td>{{$product->author}}</td>
                                            <td>${{ $product->price }}</td>
                                            <td>{{ $order->unit_quantity }}</td>
                                            <td><a href="#" onclick="window.open('http://localhost:8000/review/{{$product->id}}', 'newwindow','width=1000,height=1000,left=500,top=300');">Review</a></td>
                                                            </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <!--=== Products End ======-->
@endsection

@section('scripts')
    <script type="text/javascript">
    </script>
@endsection

