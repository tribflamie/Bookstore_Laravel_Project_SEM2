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
                                            <label for="detail">Details:</label>
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
                                        </div>
                                    </div>      
                                </div>
                        </div>
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
                                            <a onclick="return confirm('Approve this order?')" href="/admin/approve-order/{{ $order->id }}"
                                                    class="btn btn-success btn-position"><i class="fas fa-check"></i></a>
                                            <a onclick="return confirm('Cancel this order?')" href="/admin/cancel-order/{{ $order->id }}"
                                                    class="btn btn-danger btn-position" ><i class="fas fa-ban"></i></a>
                                            <?php else:?>
                                                <a href="#" disabled title="Cannot approve this order!"
                                                    class="btn btn-success btn-position"><i class="fas fa-check"></i></a>
                                                <a href="#" disabled title="Cannot cancel this order!"
                                                    class="btn btn-danger btn-position"><i class="fas fa-ban"></i></a>
                                            <?php endif;?>
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
                type: 'get',
                url: "find-order/" + orderID,
                success: function(response) {
                    //console.log(response);
                    
                    var event_data='';
                    $.each(response.orderDetail, function(index, value){
                    var idx=index+1;
                    event_data += '<tr>';
                    event_data += '<td>'+idx+'</td>';
                    event_data += '<td><img width="100" height="100" src="'+value.photo+'"></td>';
                    event_data += '<td>'+value.name+'</td>';
                    event_data += '<td>'+value.Quantity+'</td>';
                    event_data += '<td>'+value.soldPrice+'</td>';
                    event_data += '</tr>';
                    console.log(event_data);
                });
            $("#orderTable").find("tr:gt(0)").remove();
            $('#orderTable').append(event_data);
            $('#orderDetail').modal('show');
            }
            });
            
        });
    </script>
@endsection
