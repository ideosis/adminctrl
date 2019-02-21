@extends('layouts.master')
@section('pageTitle', 'Edit')
@section('pageSubtitle', 'Manage Your Post')
@section('pageIcon', 'pencil')
@section('content')
<div class="col-md-9">
  <!-- Website Overview -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Edit Post</h3>
    </div>
    <div class="panel-body">
      <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf @method('PUT')
        <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
        <input type="hidden" name="post_type" value="post" />

        <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
          <input name="_method" type="hidden" value="PATCH">
          <label>Title</label>
          <input type="text" name="post_title" id="post_title" class="form-control" value="{{ $post->post_title }}" />
          @if ($errors->has('post_title'))
            <span class="help-block">
              <strong>{{ $errors->first('post_title') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('post_slug') ? ' has-error' : '' }}">
          <label for="post_slug">Slug</label> <br/>
          <input type="text" name="post_slug" id="post_slug" class="form-control" value="{{ $post->post_slug }}" />

          @if ($errors->has('post_slug'))
            <span class="help-block">
              <strong>{{ $errors->first('post_slug') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('post_content') ? ' has-error' : '' }}">
          <label for="editPost">Content</label> <br/>
          <textarea name="post_content" class="summernote" id="post_content" cols="80" rows="6">{{ $post->post_content }}</textarea>
          
          @if ($errors->has('post_content'))
            <span class="help-block">
              <strong>{{ $errors->first('post_content') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group">
          <label for="title">Category</label> <br/>
            <select name="category_id" id="category_id" class="form-control">
            @foreach($categories as $key => $category)
              <option value="{{ $key }}" {{ $key  == $post->category_id ? 'selected="selected"' : '' }}>{{ $category }}</option>
            @endforeach()
            </select>
        </div>

          <input type="submit" class="btn btn-primary" value="Update" />
          <a class="btn btn-default" href="{{ route('posts.index') }}">Cancel</a>
        
      </form>
    </div>
  </div>
</div>
@endsection