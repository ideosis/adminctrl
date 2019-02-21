@extends('layouts.master')
@section('pageTitle', 'Edit')
@section('pageSubtitle', 'Edit Category')
@section('pageIcon', 'pencil')
@section('content')
<div class="col-md-9">
  <!-- Website Overview -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Edit Category</h3>
    </div>
    <div class="panel-body">
      <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        
        {{--
          HTML forms do not support PUT, PATCH or DELETE actions.
          So, when defining PUT, PATCH or  DELETE routes that are called from an HTML form,
          you will need to add a hidden _method field to the form.
        --}}
        @method('PUT')
        
        <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
        <input type="hidden" name="post_type" value="page" />
        
        <div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
          <label for="category_name">Title</label> <br/>
          <input type="text" name="category_name" id="category_name" class="form-control" value="{{ $category->category_name }}" />
          
          @if ($errors->has('category_name'))
            <span class="help-block">
              <strong>{{ $errors->first('category_name') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('category_slug') ? ' has-error' : '' }}">
          <label for="category_slug">Slug</label> <br/>
          <input type="text" name="category_slug" id="category_slug" class="form-control" value="{{ $category->category_slug }}" />

          @if ($errors->has('category_slug'))
            <span class="help-block">
              <strong>{{ $errors->first('category_slug') }}</strong>
            </span>
          @endif
        </div>

        <input type="submit" class="btn btn-primary" value="Update" />
        <a class="btn btn-default" href="{{ route('categories.index') }}">Cancel</a>
        
      </form>
    </div>
  </div>
</div>
@endsection