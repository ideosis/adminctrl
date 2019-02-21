@extends('layouts.master') 
@section('pageTitle', 'Posts') 
@section('pageSubtitle', 'Manage Your Posts') 
@section('pageIcon', 'pencil') 
@section('content')
<div class="col-md-9">
  <!-- Website Overview -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Posts</h3>
    </div>
    <div class="panel-body">
      <table id="dataTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($posts as $post)
          <tr>
            <td>{{ $post->post_title }}</td>
            <td>{{ $post->category->category_name }}</td>
            <td>{{ $post->created_at->diffForHumans() }}</td>
            <td class="text-center">
              <a class="btn btn-default" href="{{ route('posts.edit', $post->id) }}">Edit</a>
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-danger" data-url="posts/{{ $post->id }}" data-toggle="modal" data-target="#delete">Delete</button>
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
