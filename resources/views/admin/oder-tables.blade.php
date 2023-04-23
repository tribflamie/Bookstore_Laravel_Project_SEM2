@extends('layouts.layout-admin')

@section('title', 'Order Tables')

@section('content')
<?php use Illuminate\Support\Facades\DB;
        use App\Models\Product;?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            @if (session()->has('message'))
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order Table</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        @foreach ($orders as $order)
                            <div class="center {{$order->id}}" style="display:none">
                            <button onclick="hideDetail('{{$order->id}}');">X</button>
                                    <table class="table table-bordered shop-cart">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Sold Price</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php   
                                    $orderDetail = DB::table('order_details')->where('orders_id', $order->id)->get();
                                    $count=  DB::table('order_details')->where('orders_id', $order->id)->count();
                                    foreach ($orderDetail as $id =>$details):
                                        $product = Product::find($details->products_id);?>
                                <tr class="order">
                                    <td>{{$id+1}}</td>
                                    <td><img src="{{ asset('/images/shop/' . $product->photo) }}" width="100px" height="100px"></td>
                                    <td>{{ $product->name }} </td>
                                    <td>${{ $details->unit_sold_price }}</td>
                                    <td>{{ $details->unit_quantity }}</td>
                                </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                    </table>
                            </div>
                        @endforeach
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Actions</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Created_at</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>
                                                <?php if ($order->status=='Pending'):?>
                                                <a href="/admin/approve-order/{{ $order->id }}"
                                                    class="btn btn-success btn-position"><i class="fas fa-check"></i></a>
                                            <a onclick="return confirm('Cancel this order?')" href="/admin/cancel-order/{{ $order->id }}"
                                                    class="btn btn-danger btn-position" ><i class="fas fa-ban"></i></a>
                                            <?php else:?>
                                                <a href="#" disabled title="Cannot approve this order!"
                                                    class="btn btn-success btn-position"><i class="fas fa-check"></i></a>
                                                <a href="#" disabled title="Cannot cancel this order!"
                                                    class="btn btn-danger btn-position"><i class="fas fa-ban"></i></a>
                                            <?php endif;?>
                                                <button class="btn btn-primary btn-position" onclick="showDetail('{{$order->id}}');"> <i class="fas fa-solid fa-info"></i></button>
                                                </td>
                                            <td>{{ $order->users->name }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td>{{ $order->created_at }}</td>
                                        </tr>
                                            
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
        function showDetail(row) {
            const elements = document.getElementsByClassName(row);
            for (const e of elements) {
                e.style.display = e.style.display === 'none' ? '' : 'none';
            }

        }
        function hideDetail(row) {
            const elements = document.getElementsByClassName(row);
            for (const e of elements) {
                e.style.display = 'none';
            }

        }
    </script>
@endsection
