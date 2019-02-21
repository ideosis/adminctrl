@extends('layouts.master')
@section('pageTitle', 'Users')
@section('pageSubtitle', 'Manage Your Users')
@section('pageIcon', 'user')
@section('content')

<div class="col-md-9">
  <!-- Website Overview -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Users</h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <input type="text" class="form-control" name="filter" id="filter" placeholder="Filter">
      </div>
      <table id="dataTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Joined On</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="result">
          @foreach($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->toFormattedDateString() }}</td>
            <td class="text-center">
              <a class="btn btn-default" href="{{ route('users.edit', $user->id) }}">Edit</a>
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-danger" data-url="users/{{ $user->id }}" data-toggle="modal" data-target="#delete">Delete</button>
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
	// Client Side - Serach with Filter
	$("#filter").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#result tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
</script>
@endsection