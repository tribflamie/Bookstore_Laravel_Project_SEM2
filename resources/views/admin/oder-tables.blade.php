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
                        <div class="modal fade" id="orderDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="id">ID</label>
                                                <input type="text" id="orderID" name="orderID"class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="id">Name</label>
                                                <input type="text" id="name" name="name"class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <input type="text" id="status" name="status"class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Order At</label>
                                                <input type="text" id="date" name="status"class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="id">Details:</label>
                                                <table id="orderTable" name="orderTable" class="table table-bordered shop-cart orderTable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Picture</th>
                                                            <th>Name</th>
                                                            <th>Sold Price</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div class="form-group">
                                                <label for="id">Coupon used</label>
                                                <input type="text" id="coupon" name="id"class="form-control" readonly>
                                            </div>  
                                            <div class="form-group">
                                                <label for="id">Total</label>
                                                <input type="text" id="total" name="id"class="form-control" readonly>
                                            </div>   
                                            <div class="form-group">
                                            <a class="approveOrder btn btn-success"><i class="fas fa-check"></i></a>
                                            <a class="cancelOrder btn btn-danger" ><i class="fas fa-ban"></i></a>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                        </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Detail</th>
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
                                                <button class="showDetail btn btn-primary btn-position" value='{{$order->id}}'> <i class="fas fa-solid fa-info"></i></button>
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
        $(document).on('click', '.showDetail', function(e) {
            //alert(categories_id);
            e.preventDefault();
            var orderID = $(this).val();
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "find-order/" + orderID,
                success: function(response) {
                    //console.log(response);
                    var total=0;
                    var event_data='';
                    $.each(response.orderDetail, function(index, value){
                    var idx=index+1;
                    event_data += '<tr>';
                    event_data += '<td>'+idx+'</td>';
                    event_data += '<td><img width="100" height="100" src="'+value.photo+'"></td>';
                    event_data += '<td>'+value.name+'</td>';
                    event_data += '<td>$'+value.soldPrice+'</td>';
                    event_data += '<td>'+value.Quantity+'</td>';
                    event_data += '</tr>';
                    total+=value.soldPrice*value.Quantity;
                    console.log(event_data);
                });
            $("#orderTable").find("tr:gt(0)").remove();
            $('#orderTable').append(event_data);
            $('#orderID').val(response.id);
            $('#name').val(response.username);
            $('#status').val(response.status);
            $('#date').val(response.orderDate);
            var check=response.hasCoupon;
            if(check==1)
            {
                $('#coupon').val(response.coupon);
                var cVal=response.couponVal;
                $('#total').val(((1-cVal)*total).toFixed(2));
            }
            else{
                $('#total').val('$'+total.toFixed(2));
            }
            $('#orderDetail').modal('show');
            }
            });
            
        });
        $(document).on('click', '.approveOrder', function(e) {
            //alert(categories_id);
            
            var orderID = document.getElementById("orderID").value;
            var status = document.getElementById("status").value;
            if(status=="Approved")
            {
                alert('Order has already been approved!');
                return false;
            }
            if(status=="Cancelled")
            {
                alert('Order has already been cancelled!');
                return false;
            }
            if(!confirm('Approve this order?')) return false;
            $.ajax({
                type: "get",
                url: "approve-order/" + orderID,
                success: function(response) {
                    window.location.reload();
            }
            });
            
        });
        $(document).on('click', '.cancelOrder', function(e) {
            //alert(categories_id);
            
            var orderID = document.getElementById("orderID").value;
            var status = document.getElementById("status").value;
            if(status=="Approved")
            {
                alert('Order has already been approved!');
                return false;
            }
            if(status=="Cancelled")
            {
                alert('Order has already been cancelled!');
                return false;
            }
            if(!confirm('Cancel this order?')) return false;
            $.ajax({
                type: "get",
                url: "cancel-order/" + orderID,
                success: function(response) {
                    window.location.reload();
            }
            });
            
        });
    </script>
@endsection
