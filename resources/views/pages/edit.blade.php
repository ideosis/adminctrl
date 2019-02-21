@extends('layouts.master')
@section('pageTitle', 'Edit')
@section('pageSubtitle', 'Manage Your Pages')
@section('pageIcon', 'pencil')
@section('content')
<div class="col-md-9">
  <!-- Website Overview -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Edit Page</h3>
    </div>
    <div class="panel-body">
      <form action="{{ route('pages.update', $page->id) }}" method="POST">
        @csrf
        
        {{--
          HTML forms do not support PUT, PATCH or DELETE actions.
          So, when defining PUT, PATCH or  DELETE routes that are called from an HTML form,
          you will need to add a hidden _method field to the form.
        --}}
        @method('PUT')
        
        <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
        <input type="hidden" name="post_type" value="page" />
        
        <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
          <label for="post_title">Title</label> <br/>
          <input type="text" name="post_title" id="post_title" class="form-control" value="{{ $page->post_title }}" />
          
          @if ($errors->has('post_title'))
            <span class="help-block">
              <strong>{{ $errors->first('post_title') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('post_slug') ? ' has-error' : '' }}">
          <label for="post_slug">Slug</label> <br/>
          <input type="text" name="post_slug" id="post_slug" class="form-control" value="{{ $page->post_slug }}" />

          @if ($errors->has('post_slug'))
            <span class="help-block">
              <strong>{{ $errors->first('post_slug') }}</strong>
            </span>
          @endif
        </div>
        
        <div class="form-group{{ $errors->has('post_content') ? ' has-error' : '' }}">
          <label for="post_content">Content</label> <br/>
          <textarea name="post_content" class="summernote" id="post_content" cols="80" rows="6">{{ $page->post_content }}</textarea>
          
          @if ($errors->has('post_content'))
            <span class="help-block">
              <strong>{{ $errors->first('post_content') }}</strong>
            </span>
          @endif
        </div>

          <input type="submit" class="btn btn-primary" value="Update" />
          <a class="btn btn-default" href="{{ route('pages.index') }}">Cancel</a>
          
      </form>
    </div>
  </div>
</div>
@endsection