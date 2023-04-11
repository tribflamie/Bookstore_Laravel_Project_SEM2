@extends('layouts.layout-admin')

@section('title', 'Feedback Tables')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Feedback Tables</h1>
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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Product</th>
                                        <th>Rating</th>
                                        <th>Description</th>
                                        <th>Created_at</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feedbacks as $feedback)
                                        <tr>
                                            <td>{{ $feedback->id }}</td>
                                            <td>{{ $feedback->user->name }}</td>
                                            <td>{{ $feedback->products->name }}</td>
                                            <td>{{ $feedback->rating }}</td>
                                            <td>{{ $feedback->description }}</td>
                                            <td>{{ $feedback->created_at }}</td>
                                            <td>{{ $feedback->status }}</td>
                                            <td><a href="/admin/update-feedbacks/{{ $feedback->id }}"
                                                    class="btn btn-success"><i class="fas fa-sync-alt"></i></a></td>
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

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reply Tables</h1>
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
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Feedback</th>
                                        <th>Username</th>
                                        <th>Description</th>
                                        <th>Created_at</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($replies as $reply)
                                        <tr>
                                            <td>{{ $reply->id }}</td>
                                            <td>{{ $reply->feedbacks->description }}</td>
                                            <td>{{ $reply->user->name }}</td>
                                            <td>{{ $reply->description }}</td>
                                            <td>{{ $reply->created_at }}</td>
                                            <td>{{$reply->status}}</td>
                                            <td><a href="/admin/update-replies/{{ $reply->id }}"
                                                    class="btn btn-success"><i class="fas fa-sync-alt"></i></a></td>
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
    </script>
@endsection
