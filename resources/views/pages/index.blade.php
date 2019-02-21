@extends('layouts.master')
@section('pageTitle', 'Pages')
@section('pageSubtitle', 'Manage Your Pages')
@section('pageIcon', 'list')
@section('content')
<div class="col-md-9">
  <!-- Website Overview -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Pages</h3>
    </div>
    <div class="panel-body">
      <table id="dataTable" class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Title</th>
              <th>Author</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Title</th>
              <th>Author</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($pages as $page)
            <tr>
              <td>{{ $page->post_title }}</td>
              <td>{{ $page->user->name }}</td>
              <td>{{ $page->created_at }}</td>
              <td class="text-center">
                <a class="btn btn-default" href="{{ route('pages.edit', $page->id) }}">Edit</a>
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" data-url="pages/{{ $page->id }}" data-toggle="modal" data-target="#delete">Delete</button>
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
    $('#dataTable').DataTable( {
      "order": [[ 2, "desc" ]]
    } );
  });
</script>
@endsection
