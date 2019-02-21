<!-- Category Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
      </div>
      <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="modal-body">
          <div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
            <label for="category_name">Title</label> <br/>
            <input type="text" name="category_name" id="category_name" class="form-control" value="{{ old('category_name') }}" />            
            @if ($errors->has('category_name'))
            <span class="help-block">
                <strong>{{ $errors->first('category_name') }}</strong>
              </span> @endif
          </div>
          <div class="form-group{{ $errors->has('category_slug') ? ' has-error' : '' }}">
            <label for="category_slug">Slug</label> <br/>
            <input type="text" name="category_slug" id="category_slug" class="form-control" value="{{ old('category_slug') }}" />            
            @if ($errors->has('category_slug'))
            <span class="help-block">
                <strong>{{ $errors->first('category_slug') }}</strong>
              </span> @endif
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