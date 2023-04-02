@extends('layouts.layout-no-banner')
@section('title', 'Cart - The best-selling individual books')
@section('content')
    <!--=== Products Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <select name="filter" id="filter">
                        <?php $sortValue=array("created_at+asc","created_at+desc") ;
                              $sortName=array("Date ascending","Date descending");
                              $count=0;
                        ?>
                        @foreach ($sortValue as $val)
                        @if($val==$filter)
                        <option value="{{$val}}" selected>{{$sortName[$count++]}}</option>
                        @else
                        <option value="{{$val}}">{{$sortName[$count++]}}</option>
                        @endif
                        @endforeach
                    </select>
                    <div class="table-responsive">
                        <table class="table table-bordered shop-cart">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Preview</th>
                                    <th>Number of Products</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Order Time</th>
                                    <th colspan="2">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sum=0;$quantity=0;$couponVal=0;?>
                                <?php use Illuminate\Support\Facades\DB; ?>
                                @if ($orders)
                                    @foreach ($orders as $id => $order)
                                    <?php
                                        $sum=0;
                                        $orderDetail=DB::table('order_details')->where('orders_id',$order->id)->get();
                                        $firstProduct=DB::table('products')->where('id',$orderDetail[0]->products_id)->first();
                                        $quantity=DB::table('order_details')->where('orders_id',$order->id)->count();
                                        foreach($orderDetail as $product):
                                            $sum+=$product->unit_quantity*$product->unit_sold_price;
                                        endforeach;
                                    ?>
                                        <tr data-id="{{ $id }}" class="order">
                                            <td>{{ $id+1 }}</td>
                                            <td><img src="{{ asset($firstProduct->photo) }}"></td>
                                            <td>{{$quantity}} </td>
                                            <td><span>${{ $sum }}</span> </td>
                                            <td>{{$order->status}}
                                            <?php if($order->status=='Cancelled'||$order->status=='Accepted')
                                                echo '<br>At: '.$order->updated_at;
                                            ?>
                                            
                                            </td>
                                            <td>{{$order->created_at}}</td>
                                            <td><a href="{{ route('orderDetail',$order->id) }}">Details</a></td>
                                            @if($order->status=='Processing')
                                            <td><a href="{{ route('orderCancel',[$order->id,$filter]) }}">Cancel</a></td>
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
        $('#filter').change(function() {
        window.location.replace("http://127.0.0.1:8000/orderHistory/" + $(this).val());
});
    </script>
@endsection

