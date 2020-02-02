@extends('theme.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">


            <section class="sign_in">
                <div class="container">
                    <div class="sign_in_box_main">
                        <div class="sign_in_box_main_inner">
                            <div class="sign_in_heading">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                        <h2>Sign In</h2>
                                        <p>Don't have an account? <a href="{{ route('register') }}">
                                                <i> {{ __('Register') }}</i>
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="sign_in_boxes">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 border_left">
                                        <div class="sign_in_form">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Sign In') }}
                                                        </button>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <div class="sign_in_form_button">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-sm-12 col xs-12">
                                                    <div class="sign_in_form_button_facebook">
                                                        <a href="/login/facebook" class="btn btn-primary"><span>Continue with Facebook</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
            </section>
        </div>
    </div>
</div>
@endsection