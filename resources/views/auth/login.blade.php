@extends('layouts.master')
@section('pageTitle', 'Admin Area')
@section('pageSubtitle', 'Sign-In')
@section('pageIcon', 'dashboard')
@section('content')
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default" id="login">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Login</strong></h3>
      </div>
      <div class="panel-body">

        <form class="form-horizontal" action="{{ route('login') }}" method="POST">
            @csrf
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                  <span class="invalid-feedback">
                    <small>{{ $errors->first('email') }}</small>
                  </span>
                @endif
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                  <span class="invalid-feedback">
                    <small>{{ $errors->first('password') }}</small>
                  </span>
                @endif
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Sign in</button>
              <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
          </div>
        </form>
        
      </div>
    </div>
  </div>
@endsection