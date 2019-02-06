@extends('layouts.backend.app')

@section('content')
    <body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{url('home')}}"><b>{{ config('app.name', 'Laravel') }}</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback">
                    <input type="text" id="login" name="login" class="form-control"
                           placeholder="{{ __('E-Mail or Username') }}" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                    @endif
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="password" name="password" class="form-control"
                           placeholder="{{__('Password')}}" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> {{__('Remember Me')}}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{__('Sign In')}}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="{{url('/auth/facebook')}}" class="btn btn-block btn-social btn-facebook btn-flat"><i
                        class="fa fa-facebook"></i> {{__('Sign
                    in
                    using
                    Facebook')}}</a>
                <a href="{{url('/auth/google')}}" class="btn btn-block btn-social btn-google btn-flat"><i
                        class="fa fa-google"></i> {{__('Sign
                    in
                    using
                    Google')}}</a>
            </div>
            <!-- /.social-auth-links -->
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">{{__('I forgot my password')}}</a><br>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-center">{{__('Register a new membership')}}</a>
            @endif

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="{{asset('backend/admin-lte-2.4.5/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('backend/admin-lte-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('backend/admin-lte-2.4.5/plugins/iCheck/icheck.min.js')}}"></script>


    </body>
@endsection

@section('footer-js')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
@endsection

@section('header-css')
    <style type="text/css">
        .login-page {
            overflow: auto !important;
            background: url('{{asset('backend/images/login-background.jpg')}}') no-repeat 0px 0px;
            background-size: cover;
        }
    </style>
@endsection
