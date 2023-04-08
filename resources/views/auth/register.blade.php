@extends('layouts.layout-login')

@section('content')
    <!--=== page-title-section start ===-->
    <section class="title-hero-bg login-cover-bg" data-stellar-background-ratio="0.2">
        <div class="table-display">
            <div class="login v-align text-center">
                <div class="signup-box">
                    <ul id="signup-tabs" class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#account">Register</a></li>
                    </ul>
                    <div id="signup-content" class="tab-content">
                        <div id="account" class="tab-pane fade in active">
                            <!--=== Form ===-->
                            <form method="post" action="{{ route('register') }}" class="form login_type text-center">
                                @csrf

                                <!--=== Username ===-->
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="Username"
                                        class="form-control mb-20 @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--=== Email ===-->
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Email"
                                        class="form-control mb-20 @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--=== Password ===-->
                                <div class="form-group">
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control mb-20 @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--=== Confirm Password ===-->
                                <input id="password-confirm" type="password" class="form-control mb-20"
                                    placeholder="Confirm Password" name="password_confirmation" required
                                    autocomplete="new-password">
                                <!--=== Submit ===-->
                                <button type="submit" class="btn btn-color btn-circle full-width">
                                    {{ __('Register') }}
                                </button>
                            </form>
                            <!--=== End Form ===-->
                            <a href="{{ route('login') }}">
                                <h5 class="mt-20 gray-light">You have an account? <strong>Login</strong></h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== page-title-section end ===-->
@endsection
