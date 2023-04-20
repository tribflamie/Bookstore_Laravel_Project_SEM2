@extends('layouts.layout-admin')

@section('title', 'User Tables')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Tables</h1>
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
                                        <th>Role</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Gender</th>
                                        <th>Yob</th>
                                        <th>Phone</th>
                                        <th>Location</th>
                                        <th>Bio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td><a href="/admin/update-roles/{{ $user->id }}" onclick="return alertBtn()" class="btn btn-primary btn-position"><i class="fas fa-user-cog"></i></a></td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{$user->password}}</td>
                                            <td>{{ is_null($user->gender) ? 'None' : $user->gender }}</td>
                                            <td>{{ is_null($user->yob) ? 'None' : $user->yob }}</td>
                                            <td>{{ is_null($user->phone) ? 'None' : $user->phone }}</td>
                                            <td>{{ is_null($user->location) ? 'None' : $user->location }}</td>
                                            <td>{{ is_null($user->bio) ? 'None' : $user->bio }}</td>
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
        function alertBtn(){
            alert('Do you want to change your role?');
            return true;
        }

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
