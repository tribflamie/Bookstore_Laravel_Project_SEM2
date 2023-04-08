@extends('layouts.layout-no-banner')
@section('title', 'Cart - The best-selling individual books')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <form action="/edit-profile" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- left column -->
                    <div class="col-md-3">
                        <div class="form-group text-center">
                            @if ($data->photo == null)
                                <img src="{{ asset('images/team/avatar-1.jpg') }}" class="profile img-circle" alt="profile">
                            @else
                                <img src="{{ asset('images/team/' . $data->photo) }}" class="profile img-circle"
                                    alt="profile">
                            @endif
                            <h5>Upload a different photo</h5>

                            <input type="file" class="form-control" name="photo">
                        </div>
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" name="current_password" placeholder="••••••••" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="password" placeholder="••••••••" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="••••••••" class="form-control">
                        </div>
                    </div>
                    <!-- edit form column -->
                    <div class="col-md-9 personal-info">
                        <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a>
                            <i class="fa fa-coffee"></i>
                            {{ session('message') }}
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Username:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="{{ $data->name }}" name="username">
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
                                <input class="form-control" type="date" name="yob" value="{{ $data->yob }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="phone" placeholder="000-0000-0000"
                                    value="{{ $data->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Location:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="location"
                                    placeholder="Street, Ward, District, City, Country" value="{{ $data->location }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Bio:</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="bio">{{ $data->bio }}</textarea>
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
                </form>
            </div>
        </div>
    </section>
@endsection
