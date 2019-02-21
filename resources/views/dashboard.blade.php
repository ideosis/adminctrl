@extends('layouts.master')
@section('pageTitle', 'Dashboard')
@section('pageSubtitle', 'Manage Your Site')
@section('pageIcon', 'dashboard')
@section('content')
<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Overview</h3>
    </div>
    <div class="panel-body">
      <div class="col-md-3">
        <div class="well dash-box">
          <h2>
            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{ App\Post::where('post_type', 'page')->count() }}</h2>
          <h4>Pages</h4>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well dash-box">
          <h2>
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{ App\Post::where('post_type', 'post')->count() }}</h2>
          <h4>Posts</h4>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well dash-box">
          <h2>
            <span class="glyphicon glyphicon-list" aria-hidden="true"></span> {{ App\Category::count() }}</h2>
          <h4>Categories</h4>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well dash-box">
          <h2>
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ App\User::count() }}</h2>
          <h4>Users</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Latest User -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Latest User</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
          </tr>
        </thead>
        <tbody>
          {{-- @foreach($users as $user) --}}
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
          </tr>
          {{-- @endforeach --}}
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection