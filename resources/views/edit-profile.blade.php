@extends('layouts.layout-no-banner')
@section('title', 'Cart - The best-selling individual books')
@section('content')
    <section>
        <div class="container">
            @if (session()->has('message'))
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    {{ session()->get('message') }}
                </div>
            @endif
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" style="margin-bottom:30px">
                <li class="active"><a href="#hometab" role="tab" data-toggle="tab">Edit Profile</a></li>
                <li><a href="#javatab" role="tab" data-toggle="tab">Change Password</a></li>
            </ul>
            <div class="row">
                <div class="tab-content">
                    <div class="tab-pane active" id="hometab">
                        <form action="/update-profile" class="form-horizontal" method="POST"
                            onsubmit="return updateProfileValidation()" enctype="multipart/form-data">
                            @csrf

                            <!-- left column -->
                            <div class="col-md-3">
                                <div class="form-group text-center">
                                    @if ($data->photo == null)
                                        <img src="{{ asset('images/team/avatar-1.jpg') }}" class="profile img-circle"
                                            alt="profile">
                                    @else
                                        <img src="{{ asset('images/team/' . $data->photo) }}" class="profile img-circle"
                                            alt="profile">
                                    @endif
                                    <h5>Upload a different photo</h5>

                                    <input type="file" id="photo" class="form-control"
                                        onchange="return fileValidation1()" name="photo">
                                </div>
                            </div>
                            <!-- edit form column -->
                            <div class="col-md-9 personal-info">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Username:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="username" type="text"
                                            value="{{ $data->name }}" name="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{ $data->email }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Gender:</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <select id="gender" class="form-control" name="gender">
                                                <?php
                                                if ($data->gender == 'Female') {
                                                    echo '<option value="Female">Female</option>';
                                                    echo '<option value="Male">Male</option>';
                                                } else {
                                                    echo '<option value="Male">Male</option>';
                                                    echo '<option value="Female">Female</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Birthday:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" id="yob" type="date" name="yob"
                                            value="{{ $data->yob }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="phone" type="text" name="phone"
                                            placeholder="0000-0000-0000" value="{{ $data->phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Location:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" id="location" name="location"
                                            placeholder="Street, Ward, District, City, Country"
                                            value="{{ $data->location }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Bio:</label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" id="bio" name="bio">{{ $data->bio }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                        <span></span>
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="javatab">
                        <div class="col-md-6 offset-md-3">
                            <span class="anchor" id="formChangePassword"></span>
                            <hr class="mb-5">

                            <!-- form card change password -->
                            <div class="card card-outline-secondary">
                                <div class="card-header">
                                    <h3 class="mb-30">Change Password</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="/change-password" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="password" name="current_password" class="form-control"
                                                placeholder="Current Password" autofocus>
                                            @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="new_password" class="form-control"
                                                placeholder="New Password">
                                            @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm_password" class="form-control"
                                                placeholder="Confirm Password">
                                            @error('confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Save Change</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /form card change password -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript">
        function updateProfileValidation() {
            //check string
            var username = $('#username').val();
            if (username.trim() == '') {
                alert('Username cannot be blank!');
                return false;
            }
            //check date
            var yob = $('#yob').val();
            if (new Date(Date.parse(yob)) > new Date()) {
                alert('Birthday must be less than or equal current date!');
                return false;
            }
            //check string
            var phone = $('#phone').val();
            if (phone.trim() == '') {
                alert('Phone cannot be blank!');
                return false;
            }
            if ((!phone.match(/^(84|0[3|5|7|8|9])+([0-9]{8})$/))) {
                alert('Phone nummber is invalid!');
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
    </script>
@endsection
