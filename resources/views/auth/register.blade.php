@extends('layouts.backend.app')
@section('content')
    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{url('home')}}"><b>{{ config('app.name', 'Laravel') }}</b></a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{__('Register a new membership')}}</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group has-feedback">
                    <input type="text" name="name" class="form-control {{$errors->has('name') ? 'has-error' :''}}"
                           placeholder="{{__('Full name')}}" value="{{old('name')}}" autocapitalize="characters"
                           required
                           autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="username" name="username" value="{{old('username')}}"
                           class="form-control {{$errors->has('username') ? 'has-error' :''}}"
                           placeholder="{{__('Username')}}" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" value="{{old('email')}}"
                           class="form-control {{$errors->has('email') ? 'has-error' :''}}"
                           placeholder="{{__('Email')}}" autocapitalize="off" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password"
                           class="form-control {{$errors->has('password') ? 'has-error' :''}}"
                           placeholder="{{__('Password')}}" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{__('Retype password')}}" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{__('Register')}}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{route('login')}}" class="text-center">{{__('I already have a membership')}}</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
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
