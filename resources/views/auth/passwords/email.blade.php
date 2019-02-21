@extends('layouts.master')
@section('pageTitle', 'Admin Area')
@section('pageSubtitle', 'Request Password Reset')
@section('content')
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default" id="login">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Reset Password</strong></h3>
      </div>
      <div class="panel-body">

        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
          @csrf
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus/>

              @if ($errors->has('email'))
                <span class="invalid-feedback">
                  <small>{{ $errors->first('email') }}</small>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Send Password Reset Link</button>
            </div>
          </div>
        </form>
        
      </div>
    </div>
  </div>
@endsection