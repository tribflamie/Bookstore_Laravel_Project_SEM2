@extends('layouts.no-footer')

@section('content')
    <!--=== page-title-section start ===-->
    <section class="title-hero-bg login-cover-bg" data-stellar-background-ratio="0.2">
        <div class="table-display">
            <div class="login v-align text-center">
                <div class="signup-box">
                    <ul id="signup-tabs" class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                    </ul>
                    <div id="signup-content" class="tab-content">
                        <div id="login" class="tab-pane fade in active">
                            <!--=== Form ===-->
                            <form method="post" action="{{ route('login') }}" class="form login_type text-center">
                                @csrf

                                <!--=== Username (Email) ===-->
                                <input id="email" type="email" placeholder="Email" name="email"
                                    class="form-control mb-20 @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--=== Password ===-->
                                <input id="password" type="password" placeholder="Password"
                                    class="form-control mb-20 @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--=== Submit===-->
                                <button type="submit" class="btn btn-color btn-circle full-width">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        <h6 class="mt-20 gray-light">{{ __('FORGOT YOUR PASSWORD?') }}</h6>
                                    </a>
                                @endif
                            </form>
                            <!--=== End Form ===-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== page-title-section end ===-->
@endsection
