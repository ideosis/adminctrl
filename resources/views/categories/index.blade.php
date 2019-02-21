@extends('layouts.master')
@section('pageTitle', 'Categories')
@section('pageSubtitle', 'Manage Categories')
@section('pageIcon', 'list')
@section('content')
<div class="col-md-9">
  <!-- Website Overview -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Categories</h3>
    </div>
    <div class="panel-body">
      <table id="dataTable" class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Created On</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Title</th>
              <th>Slug</th>
              <th>Created On</th>
              <th class="text-center">Actions</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{ $category->category_name }}</td>
              <td>{{ $category->category_slug }}</td>
              <td>{{ $category->created_at->toFormattedDateString() }}</td>
              <td class="text-center">
                <a class="btn btn-default" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" data-url="categories/{{ $category->id }}" data-toggle="modal" data-target="#delete">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
// Call the dataTables jQuery plugin
$(document).ready(function() {
	$('#dataTable').DataTable();
});
</script>
@endsection
