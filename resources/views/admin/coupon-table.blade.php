@extends('layouts.layout-admin')

@section('title', 'User Tables')

@section('content')
    <!-- First Content Header -->
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
                    <h1>Coupon Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#cateModal"><i
                                    class="nav-item fas fa-edit"></i>Create</a></li>
                        <li class="breadcrumb-item active">Coupon Table</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Create Category Modal -->
    <div class="modal fade" id="cateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="/admin/save-coupon" method="POST" enctype="multipart/form-data"
                onsubmit="return createCouponValidation()" novalidate>
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Coupon</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="code">Code *</label>
                            <input type="text" id="code" name="code"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="value">Value * (< 1)</label>
                                    <input type="text" id="value" name="value" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description *</label>
                            <textarea id="description" name="description" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exp_date">Expiration Date * (> current date)</label>
                            <input type="date" id="exp_date" name="exp_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <ol style="margin:15px;padding:0;">
                                <li><strong>(*) is required</strong></li>
                            </ol>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal -->

    <!-- First Content -->
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
                                        <th>Code</th>
                                        <th>Value</th>
                                        <th>Description</th>
                                        <th>Expiration Date</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coupons as $coupon)
                                        <tr>
                                            <td>{{ $coupon->id }}</td>
                                            <td><button type="button" value={{ $coupon->id }}
                                                    class="btn btn-primary btn-position updatebtn"><i
                                                        class="fas fa-sync-alt"></i></button></td>
                                            <td>{{ $coupon->status }}</td>
                                            <td>{{ $coupon->code }}</td>
                                            <td>{{ $coupon->value }}</td>
                                            <td>{{ $coupon->description }}</td>
                                            <td>{{ $coupon->exp_date }}</td>
                                            <td>{{ $coupon->created_at }}</td>
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

    <!-- Update Category Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ url('admin/update-coupon') }}" method="POST" onsubmit="return updateCouponValidation()"
                enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Coupon</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" id="id" name="id"class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="codeUpdate">Code *</label>
                            <input type="text" id="codeUpdate" name="codeUpdate"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="valueUpdate">Value * (< 1)</label>
                            <input type="text" id="valueUpdate" name="valueUpdate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="descriptionUpdate">Description *</label>
                            <textarea id="descriptionUpdate" name="descriptionUpdate" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exp_dateUpdate">Expiration Date * (> current date)</label>
                            <input type="date" id="exp_dateUpdate" name="exp_dateUpdate" class="form-control">
                        </div>
                        <div class="form-group">
                            <ol style="margin:15px;padding:0;">
                                <li><strong>(*) is required</strong></li>
                            </ol>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal -->
@endsection

@section('scripts')
    <script type="text/javascript">
        function createCouponValidation() {
            //check string
            var code = $('#code').val();
            if (code.trim() == '') {
                alert('Code is required');
                return false;
            }
            var value = $('#value').val();
            if (value.trim() == '') {
                alert('Value is required!');
                return false;
            }
            if ((!value.match(/^\d*\.?\d+$/)) || value > 1) {
                alert('Value must be decimal and less than or equal 1!');
                return false;
            }
            //check string
            var description = $('#description').val();
            if (description.trim() == '') {
                alert('Description is required');
                return false;
            }
            //check date
            var exp_date = $('#exp_date').val();
            if (exp_date == '') {
                alert('Expiration date is required');
                return false;
            }
            if (new Date(Date.parse(exp_date)) <= new Date()) {
                alert('Expiration date is greater than current date');
                return false;
            }
            return true;
        }

        function updateCouponValidation() {
            //check string
            var code = $('#codeUpdate').val();
            if (code.trim() == '') {
                alert('Code is required');
                return false;
            }
            var value = $('#valueUpdate').val();
            if (value.trim() == '') {
                alert('Value is required!');
                return false;
            }
            if ((!value.match(/^\d*\.?\d+$/)) || value > 1) {
                alert('Value must be decimal and less than or equal 1!');
                return false;
            }
            //check string
            var description = $('#descriptionUpdate').val();
            if (description.trim() == '') {
                alert('Description is required');
                return false;
            }
            //check date
            var exp_date = $('#exp_dateUpdate').val();
            if (exp_date == '') {
                alert('Expiration date is required');
                return false;
            }
            if (new Date(Date.parse(exp_date)) <= new Date()) {
                alert('Expiration date is greater than current date');
                return false;
            }
            return true;
        }
        //add updatebtn
        $(document).on('click', '.updatebtn', function() {
            var coupons_id = $(this).val();
            //alert(categories_id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "find-coupon/" + coupons_id,
                success: function(response) {
                    //console.log(response);
                    $('#id').val(response.coupons.id);
                    $('#codeUpdate').val(response.coupons.code);
                    $('#valueUpdate').val(response.coupons.value);
                    $('#descriptionUpdate').val(response.coupons.description);
                    $('#exp_dateUpdate').val(response.coupons.exp_date);
                }
            })
        });

        //DataTable
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
