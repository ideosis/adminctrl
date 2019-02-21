@extends('layouts.master')
@section('pageTitle', 'Edit')
@section('pageSubtitle', 'Manage Your Profile')
@section('pageIcon', 'user')
@section('content')
<div class="col-md-9">
  <!-- Website Overview -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Edit User</h3>
    </div>
    <div class="panel-body">
      <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <input name="_method" type="hidden" value="PATCH">
          <label>Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" />
          @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input name="_method" type="hidden" value="PATCH">
          <label>Email</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" />
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        

        {{-- <div class="form-group">
          <label for="title">Category</label> <br/>
            <select name="category_id" id="category_id" class="form-control">
            @foreach($categories as $key => $category)
              <option value="{{ $key }}" {{ $key  == $post->category_id ? 'selected="selected"' : '' }}>{{ $category }}</option>
            @endforeach()
            </select>
        </div> --}}

          <input type="submit" class="btn btn-primary" value="Update" />
          <a class="btn btn-default" href="{{ route('users.index') }}">Cancel</a>
        
      </form>
    </div>
  </div>
</div>
@endsection