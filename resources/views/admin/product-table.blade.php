@extends('layouts.layout-admin')

@section('title', 'Product Tables')

@section('content')
    <!-- Second Content Header -->
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
                    <h1>Product Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#productModal"><i
                                    class="nav-item fas fa-edit"></i>Create</a></li>
                        <li class="breadcrumb-item active">Product Tables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Create Product Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="/admin/save-products" method="POST" onsubmit="return createProductValidation()"
                enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="categories_id">Categories</label>
                            <select id="categories_id" name="categories_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->categories }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <select id="author" name="author" class="form-control">
                                @foreach ($authors as $author)
                                    <option value="{{ $author->author }}">{{ $author->author }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select id="country" name="country" class="form-control">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->country }}">{{ $country->country }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="published">Published * (<= current year)</label>
                                    <input type="text" id="published" name="published"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price * (< 100)</label>
                                    <input type="text" id="price" name="price"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount * (<= 1)</label>
                                    <input type="text" id="discount" name="discount"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description *</label>
                            <textarea id="description" name="description"class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo *</label>
                            <input type="file" id="photo" name="photo" onchange="return fileValidation1()"
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
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal -->
    <!-- Second Content -->
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
                                        <th>Categories</th>
                                        <th>Name</th>
                                        <th>Author</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Description</th>
                                        <th>Published</th>
                                        <th>Country</th>
                                        <th>Photo</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td><button type="button" value={{ $product->id }}
                                                    class="btn btn-primary btn-position updatebtn2"><i
                                                        class="fas fa-sync-alt"></i></button>
                                                <a href="/admin/show-product/{{ $product->id }}"
                                                    class="btn btn-primary btn-position"><i class="fas fa-eye"></i></a>
                                                <a href="/admin/hide-product/{{ $product->id }}"
                                                    class="btn btn-danger btn-position"><i
                                                        class="fas fa-eye-slash"></i></a>
                                            </td>
                                            <td>{{ $product->status }}</td>
                                            <td>{{ $product->categories->categories }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->author }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->discount }}</td>
                                            <td>
                                                @if (strlen($product->description) > 20)
                                                    {{ substr($product->description, 0, 20) }}
                                                    <span class="read-more-show hide_content">More <i
                                                            class="fa fa-angle-down"></i></span>
                                                    <span class="read-more-content">
                                                        {{ substr($product->description, 20, strlen($product->description)) }}
                                                        <span class="read-more-hide hide_content">Less <i
                                                                class="fa fa-angle-up"></i></span> </span>
                                                @else
                                                    {{ $product->description }}
                                                @endif
                                            </td>
                                            <td>{{ $product->published }}</td>
                                            <td>{{ $product->country }}</td>
                                            <th>{{ $product->photo }}</th>
                                            <td>{{ $product->created_at }}</td>
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
    <!-- Update Product Modal -->
    <div class="modal fade" id="editModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ url('admin/update-products') }}" method="POST" onsubmit="return updateProductValidation()"
                enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="product_id">ID</label>
                            <input type="text" id="product_id" name="product_id" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="product_categories_id">Categories</label>
                            <select id="product_categories_id" name="product_categories_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->categories }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="products_name">Name *</label>
                            <input type="text" id="product_name" name="product_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="product_author">Author</label>
                            <select id="product_author" name="product_author" class="form-control">
                                @foreach ($authors as $author)
                                    <option value="{{ $author->author }}">{{ $author->author }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_country">Country</label>
                            <select id="product_country" name="product_country" class="form-control">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->country }}">{{ $country->country }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_published">Published * (<= current year)</label>
                                    <input type="text" id="product_published" name="product_published"
                                        class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="product_price">Price * (< 100)</label>
                                    <input type="text" id="product_price" name="product_price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="product_discount">Discount * (<= 1)</label>
                                    <input type="text" id="product_discount" name="product_discount"
                                        class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description *</label>
                            <textarea id="product_description" name="product_description" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" id="product_photo" name="product_photo"
                                onchange="return fileValidation2()" class="form-control">
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
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.Modal -->
@endsection

@section('scripts')
    <script type="text/javascript">
        function createProductValidation() {
            //check string 
            var name = $('#name').val();
            if (name.trim() == '') {
                alert('Name is required');
                return false;
            }
            //check year
            var published = $('#published').val();
            var currYear = new Date().getFullYear();
            if (published.trim() == '') {
                alert('Published is required!');
                return false;
            }
            if ((!published.match(/^\d{4}$/)) || published > currYear) {
                alert('Published must be a year and less than or equal current year!');
                return false;
            }
            //check number
            var price = $('#price').val();
            if (price.trim() == '') {
                alert('Price is required!');
                return false;
            }
            if ((!price.match(/^\d*\.?\d+$/)) || price >= 100) {
                alert('Price must be decimal and less than 100!');
                return false;
            }
            //check number
            var discount = $('#discount').val();
            if (discount.trim() == '') {
                alert('Discount is required!');
                return false;
            }
            if ((!discount.match(/^\d*\.?\d+$/)) || discount > 1 || discount < 0) {
                alert('Discount must be decimal and less than or equal 1');
                return false;
            }
            //check string
            var description = $('#description').val();
            if (description.trim() == '') {
                alert('Description is required');
                return false;
            }
            //check file
            if (!$('#photo').val()) {
                alert('Empty input file!');
                return false;
            }
            return true;
        }

        function updateProductValidation() {
            //check string 
            var name = $('#product_name').val();
            if (name.trim() == '') {
                alert('Name is required');
                return false;
            }
            //check year
            var published = $('#product_published').val();
            var currYear = new Date().getFullYear();
            if (published.trim() == '') {
                alert('Published is required!');
                return false;
            }
            if ((!published.match(/^\d{4}$/)) || published > currYear) {
                alert('Published must be a year and less than or equal current year!');
                return false;
            }
            //check number
            var price = $('#product_price').val();
            if (price.trim() == '') {
                alert('Price is required!');
                return false;
            }
            if ((!price.match(/^\d*\.?\d+$/)) || price >= 100) {
                alert('Price must be decimal and less than 100!');
                return false;
            }
            //check number
            var discount = $('#product_discount').val();
            if (discount.trim() == '') {
                alert('Discount is required!');
                return false;
            }
            if ((!discount.match(/^\d*\.?\d+$/)) || discount > 1) {
                alert('Discount must be decimal and less than or equal 1 / more than 0!');
                return false;
            }
            //check string
            var description = $('#product_description').val();
            if (description.trim() == '') {
                alert('Description is required');
                return false;
            }
            return true;
        }

        //file validation 1
        function fileValidation1() {
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

        //file validation 2
        function fileValidation2() {
            var fileInput = document.getElementById('product_photo');
            var filePath = fileInput.value;
            // Allowing file type
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            }
        }

        $(document).on('click', '.updatebtn2', function() {
            var products_id = $(this).val();
            //alert(products_id);
            $('#editModal2').modal('show');
            $.ajax({
                type: "GET",
                url: "update-products/" + products_id,
                success: function(response) {
                    //console.log(response);
                    $('#product_id').val(response.products.id);
                    $('#product_categories_id').val(response.products.categories_id);
                    $('#product_name').val(response.products.name);
                    $('#product_author').val(response.products.author);
                    $('#product_price').val(response.products.price);
                    $('#product_discount').val(response.products.discount);
                    $('#product_country').val(response.products.country);
                    $('#product_published').val(response.products.published);
                    $('#product_description').val(response.products.description);
                }
            })
        });

        //datatable 
        $(function() {
            //Table 2
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
