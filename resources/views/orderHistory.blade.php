@extends('layouts.layout-no-banner')
@section('title', 'Your orders')
@section('content')
    <!--=== Products Start ======-->
    <section>
        @if (session('cancelSuccess'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{ session('cancelSuccess') }}</strong>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <select name="filter" id="filter">
                        <?php $sortValue = ['created_at+asc', 'created_at+desc'];
                        $sortName = ['Order time ascending', 'Order time descending'];
                        $count = 0;
                        ?>
                        @foreach ($sortValue as $val)
                            @if ($val == $filter)
                                <option value="{{ $val }}" selected>{{ $sortName[$count++] }}</option>
                            @else
                                <option value="{{ $val }}">{{ $sortName[$count++] }}</option>
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
                                <?php $sum = 0;
                                $quantity = 0;
                                $couponVal = 0; ?>
                                <?php use Illuminate\Support\Facades\DB; ?>
                                @if ($orders)
                                    @foreach ($orders as $id => $order)
                                        <?php
                                        $sum = 0;
                                        $orderDetail = DB::table('order_details')
                                            ->where('orders_id', $order->id)
                                            ->get();
                                        $firstProduct = DB::table('products')
                                            ->where('id', $orderDetail[0]->products_id)
                                            ->first();
                                        $quantity = DB::table('order_details')
                                            ->where('orders_id', $order->id)
                                            ->count();
                                        foreach ($orderDetail as $product):
                                            $sum += $product->unit_quantity * $product->unit_sold_price;
                                        endforeach;
                                        ?>
                                        <tr data-id="{{ $id }}" class="order">
                                            <td>{{ $id + 1 }}</td>
                                            <td><img src="{{ asset('/images/shop/' . $firstProduct->photo) }}"></td>
                                            <td>{{ $quantity }} </td>
                                            <td><span>${{ $sum }}</span> </td>
                                            <td>{{ $order->status }}
                                                <?php if ($order->status == 'Cancelled' || $order->status == 'Approved') {
                                                    echo '<br>At: ' . $order->updated_at;
                                                }
                                                ?>
                                            </td>
                                            <td>{{ $order->created_at }}</td>
                                            <td><a href="{{ route('orderDetail', $order->id) }}"
                                                    class="btn btn-primary btn-position"><i
                                                        class="fas fa-solid fa-info"></i></a></td>
                                            @if ($order->status == 'Pending')
                                                <td><a href="{{ route('orderCancel', [$order->id, $filter]) }}"
                                                        onclick="return confirm('Cancel this order?')"
                                                        class="btn btn-danger btn-position"><i class="fas fa-solid fa-ban"
                                                            style="color: #000000;"></i></a></td>
                                            @else
                                                <td><a href="#" disabled
                                                        title="This order has already been approved/cancelled!"
                                                        class="btn btn-danger btn-position"><i class="fas fa-solid fa-ban"
                                                            style="color: #000000;"></i></a></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        {!! $orders->links() !!}
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
