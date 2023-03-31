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
                                    <th>ID</th>
                                    <th>Preview</th>
                                    <th>Number of Products</th>
                                    <th>Discount</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th colspan="2">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sum=0;$quantity=0;$couponVal=0;?>
                                <?php use Illuminate\Support\Facades\DB; ?>
                                @if (session('orders'))
                                    <?php $orders=session()->get('orders');?>
                                    @foreach ($orders as $id => $order)
                                    <?php
                                        $sum=0;
                                        $orderDetail=DB::table('order_details')->where('orders_id',$order->id)->get();
                                        $firstProduct=DB::table('products')->where('id',$orderDetail[0]->products_id)->first();
                                        $quantity=DB::table('order_details')->where('orders_id',$order->id)->count();
                                        $couponVal=DB::table('coupons')->where('orders_id',$order->id)->first();
                                        foreach($orderDetail as $product):
                                            $sum+=$product->unit_quantity*$product->unit_sold_price;
                                        endforeach;
                                        if($couponVal>0) $sum*=(1-$couponVal);
                                    ?>
                                        <tr data-id="{{ $id }}" class="order">
                                            <td>{{ $id+1 }}</td>
                                            <td><img src="{{ asset($firstProduct->photo) }}"></td>
                                            <td>{{$quantity}} </td>
                                            <td>-${{$sum*$couponVal}}</td>
                                            <td><span>${{ $sum }}</span> </td>
                                            <td>{{$order->status}}</td>
                                            <td><a href="{{ route('orderDetail',$order->id) }}">Details</a></td>
                                            @if($order->status!='Cancelled')
                                            <td><a href="{{ route('orderCancel',$order->id) }}">Cancel</a></td>
                                            @else
                                            <td>Cancel</td>
                                            @endif
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
