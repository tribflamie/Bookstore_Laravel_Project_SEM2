@extends('layouts.layout-admin')

@section('title', 'Feedback Tables')

@section('content')
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
                    <h1>Feedback Table</h1>
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
                                        <th>Actions</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Product</th>
                                        <th>Rating</th>
                                        <th>Description</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feedbacks as $feedback)
                                        <tr>
                                            <td>{{ $feedback->id }}</td>
                                            <td>
                                                <a href="/admin/show-feedback/{{ $feedback->id }}"
                                                    class="btn btn-primary btn-position"><i class="fas fa-eye"></i></a>
                                                <a href="/admin/hide-feedback/{{ $feedback->id }}"
                                                    class="btn btn-danger btn-position"><i class="fas fa-eye-slash"></i></a>
                                            </td>
                                            <td>{{ $feedback->status }}</td>
                                            <td>{{ $feedback->user->email }}</td>
                                            <td>{{ $feedback->products->name }}</td>
                                            <td>{{ $feedback->rating }}</td>
                                            <td>
                                                @if (strlen($feedback->description) > 20)
                                                    {{ substr($feedback->description, 0, 20) }}
                                                    <span class="read-more-show hide_content">More <i
                                                            class="fa fa-angle-down"></i></span>
                                                    <span class="read-more-content">
                                                        {{ substr($feedback->description, 20, strlen($feedback->description)) }}
                                                        <span class="read-more-hide hide_content">Less <i
                                                                class="fa fa-angle-up"></i></span> </span>
                                                @else
                                                    {{ $feedback->description }}
                                                @endif
                                            </td>
                                            <td>{{ $feedback->created_at }}</td>
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
                    <h1>Reply Table</h1>
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
                                        <th>Actions</th>
                                        <th>Status</th>
                                        <th>Feedback</th>
                                        <th>Email</th>
                                        <th>Reply</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($replies as $reply)
                                        <tr>
                                            <td>{{ $reply->id }}</td>
                                            <td>
                                                <a onclick="return confirm('show this review?')"href="/admin/show-reply/{{ $reply->id }}"
                                                    class="btn btn-primary btn-position"><i class="fas fa-eye"></i></a>
                                                <a onclick="return confirm('hide this review?')" href="/admin/hide-reply/{{ $reply->id }}"
                                                    class="btn btn-danger btn-position"><i class="fas fa-eye-slash"></i></a>
                                            </td>
                                            <td>{{ $reply->status }}</td>
                                            <td>{{ $reply->feedbacks->description }}</td>
                                            <td>{{ $reply->user->email }}</td>
                                            <td>{{ $reply->description }}</td>
                                            <td>{{ $reply->created_at }}</td>
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

        // Hide the extra content initially, using JS so that if JS is disabled, no problemo:
        $('.read-more-content').addClass('hide_content')
        $('.read-more-show, .read-more-hide').removeClass('hide_content')

        // Set up the toggle effect:
        $('.read-more-show').on('click', function(e) {
            $(this).next('.read-more-content').removeClass('hide_content');
            $(this).addClass('hide_content');
            e.preventDefault();
        });

        // Changes contributed by @diego-rzg
        $('.read-more-hide').on('click', function(e) {
            var p = $(this).parent('.read-more-content');
            p.addClass('hide_content');
            p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
            e.preventDefault();
        });
    </script>
@endsection
