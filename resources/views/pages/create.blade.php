<!-- Pages Modal -->
<div class="modal fade" id="pageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Create New Page</h4>
      </div>
      <form method="POST" action="{{url('pages')}}">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
        <input type="hidden" name="post_type" value="page" />
          
        <div class="modal-body">

          <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
            <label for="post_title">Title</label>
            <input type="text" class="form-control" name="post_title" id="post_title" value="{{ old('post_title') }}" />
            @if ($errors->has('post_title'))
              <span class="help-block">
                <small>{{ $errors->first('post_title') }}</small>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('post_slug') ? ' has-error' : '' }}">
            <label for="post_slug">Slug</label> <br/>
            <input type="text" class="form-control" name="post_slug" id="post_slug" value="{{ old('post_slug') }}" />
            @if ($errors->has('post_slug'))
              <span class="help-block">
                <small>{{ $errors->first('post_slug') }}</small>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('post_content') ? ' has-error' : '' }}">
            <label for="post_content">Content</label> <br/>
            <textarea name="post_content" class="summernote" id="post_content" cols="80" rows="6">{{ old('post_content') }}</textarea>
            @if ($errors->has('post_content'))
              <span class="help-block">
                <small>{{ $errors->first('post_content') }}</small>
              </span>
            @endif
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary mb1 bg-teal">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>