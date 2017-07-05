@extends('layouts.appnew')

@section('page_title')
    Đăng nhập
@endsection

@section('content')
    <div class="wrap-login login-5sao">
        <div class="col-xs-12  ng-scope" ng-controller="LoginCtrl as login" id="login5sao">
            <div class="title">
                <p class="title-login">Chào buổi chiều!</p>
                <p class="title-login-dri">Chúc bạn một ngày làm việc hiệu quả!</p>
            </div>
        <form role="form" method="POST" action="{{ route('login') }}">
            <div class="link-login">
                <ul class="h-ul-li">
                    <li class="active"><a href="{{ route('login') }}">Đăng nhập</a></li>
                    <li><a href="/Register">Đăng ký</a></li>
                </ul>
            </div>

            {{ csrf_field() }}

            <div class="group-ip-animate {{ $errors->has('email') ? ' has-error' : '' }}">
                <input class="log-input" id="email" name="email" name="email" value="{{ old('email') }}" required autofocus data-toggle="tooltip" data-placement="bottom" data-original-title="Email bắt buộc" >
                <span class="bar"></span>
                <label>Email</label>
                @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>
            <div class="group-ip-animate {{ $errors->has('password') ? ' has-error' : '' }}">
                <input class="log-input" id="password" name="password" type="password" required data-toggle="tooltip" data-placement="bottom" data-original-title="Mật khẩu bắt buộc">
                <span class="bar"></span>
                <label>Mật khẩu</label>
                @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox">

                        <input id="chk-remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="chk-remember"> Ghi nhớ</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        Đăng nhập
                    </button>

                    <a class="btn btn-link " href="{{ route('register') }}">
                        Đăng ký tài khoản
                    </a>

                    <a class="btn btn-link hidden" href="{{ route('password.request') }}">
                        Quên mật khẩu?
                    </a>
                </div>
            </div>
        </form>

        </div>
    </div>
@endsection

@section('header-scripts')
    <link rel="stylesheet" href="{!! asset('css/fonts.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/login.css') !!}" />
@endsection

@section('footer-scripts')
@endsection
