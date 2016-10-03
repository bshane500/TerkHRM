@extends('layouts.auth')
@section('logo')
    <img src="{{asset('images/logo.png')}}" alt="TerkHRM" width="100" height="100">
@endsection
@section('content')

    <form action="{{ url('/login') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="text" name="email" class="form-control login-field"
                   value="{{ old('email') }}"
                   placeholder="Enter your email" id="login-name"/>
            <label class="login-field-icon fui-user" for="login-name"></label>
            @if ($errors->has('email'))
                <span class="help-block">
                     <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" name="password" class="form-control login-field" value=""
                   placeholder="Password" id="login-pass"/>
            <label class="login-field-icon fui-lock" for="login-pass"></label>
            @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <a href="password/reset">I forgot my password</a><br>


@endsection
