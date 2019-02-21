@extends('layouts.master')
@section('pageTitle', 'Admin Area')
@section('pageSubtitle', 'Signup Account')
@section('pageIcon', 'dashboard')
@section('content')
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default" id="login">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Register</strong></h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
              @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <small>{{ $errors->first('name') }}</small>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
            <label for="confirm-password" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Register me</button>
              <a class="btn btn-link" href="{{ route('login') }}">Already have an account?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection