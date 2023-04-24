@extends('layouts.layout-admin')

@section('title', 'Category Table')

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
                    <h1>Category Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#cateModal"><i
                                    class="nav-item fas fa-edit"></i>Create</a></li>
                        <li class="breadcrumb-item active">Category Tables</li>
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
            <form action="/admin/save-categories" method="POST" onsubmit="return createCategoryValidation()"
                enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputCat">Categories *</label>
                            <input type="text" id="inputCat" name="categories"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDes">Description *</label>
                            <textarea type="text" id="inputDes" name="description" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputPho">Photo *</label>
                            <input type="file" id="inputPho" name="photo" onchange="return fileValidation1()"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <ol style="margin:15px;padding:0;">
                                <li><strong>(*) is required</strong></li>
                                <li><strong>photo (.jpg|.jpeg|.png|.gif)</strong></li>
                            </ol>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" onclick="return confirm('create new category?')" class="btn btn-primary">Save changes</button>
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
                                        <th>Categories</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td><button type="button" value={{ $category->id }}
                                                    class="btn btn-primary btn-position updatebtn"><i
                                                        class="fas fa-sync-alt"></i></button></td>
                                            <td>{{ $category->categories }}</td>
                                            <td>
                                                @if (strlen($category->description) > 20)
                                                    {{ substr($category->description, 0, 20) }}
                                                    <span class="read-more-show hide_content">More <i
                                                            class="fa fa-angle-down"></i></span>
                                                    <span class="read-more-content">
                                                        {{ substr($category->description, 20, strlen($category->description)) }}
                                                        <span class="read-more-hide hide_content">Less <i
                                                                class="fa fa-angle-up"></i></span> </span>
                                                @else
                                                    {{ $category->description }}
                                                @endif
                                            </td>
                                            <td>{{ $category->photo }}</td>
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
            <form action="{{ url('admin/update-categories') }}" method="POST" onsubmit="return updateCategoryValidation()"
                enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="categories_id">ID</label>
                            <input type="text" id="categories_id" name="categories_id" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="categories">Categories *</label>
                            <input type="text" id="categories" name="categories" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description *</label>
                            <textarea type="text" id="description" name="description" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" id="photo" name="photo" onchange="return fileValidation2()"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <ol style="margin:15px;padding:0;">
                                <li><strong>(*) is required</strong></li>
                                <li><strong>photo (.jpg|.jpeg|.png|.gif)</strong></li>
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
        //create category validation
        function createCategoryValidation() {
            //check string
            var category = $('#inputCat').val();
            if (category.trim() == '') {
                alert('Category is required!');
                return false;
            }
            //check string
            var description = $('#inputDes').val();
            if (description.trim() == '') {
                alert('Description is required!');
                return false;
            }
            //check file
            var photo = $('#inputPho').val();
            if (photo == '') {
                alert("Empty input file");
                return false;
            }
            return true;
        }

        //public update category validation
        function updateCategoryValidation() {
            //check string
            var category = $('#categories').val();
            if (category.trim() == '') {
                alert('Category is required!');
                return false;
            }
            //check string
            var description = $('#description').val();
            if (description.trim() == '') {
                alert('description is required!');
                return false;
            }
            return true;
        }

        //file validation 1
        function fileValidation1() {
            var fileInput = document.getElementById('inputPho');
            var filePath = fileInput.value;
            // Allowing file type
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            }
        }

        //file validation 2
        function fileValidation2() {
            var fileInput = document.getElementById('photo');
            var filePath = fileInput.value;
            // Allowing file type
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            }
        }

        //find button id on click then get value from database table
        $(document).on('click', '.updatebtn', function() {
            var categories_id = $(this).val();
            //alert(categories_id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "update-categories/" + categories_id,
                success: function(response) {
                    //console.log(response);
                    $('#categories_id').val(response.categories.id);
                    $('#categories').val(response.categories.categories);
                    $('#description').val(response.categories.description);
                }
            })
        });

        //datatable bootstrap
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
