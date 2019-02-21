<div class="col-md-3">
  <div class="list-group">
    <a href="{{ url('dashboard') }}" class="list-group-item active">
      <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard
    </a>
    <a href="{{ url('pages') }}" class="list-group-item">
      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
      Pages
      <span class="badge">{{ App\Post::where('post_type', 'page')->count() }}</span>
    </a>
    <a href="{{ url('posts') }}" class="list-group-item">
      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
      Posts
      <span class="badge">{{ App\Post::where('post_type', 'post')->count() }}</span>
    </a>
    <a href="{{ url('categories') }}" class="list-group-item">
      <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
      Categories
      <span class="badge">{{ App\Category::count() }}</span>
    </a>
    @if(Auth::user()->role_id == 1)
    <a href="{{ url('users') }}" class="list-group-item">
      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      Users
      <span class="badge">{{ App\User::count() }}</span>
    </a>
    @endif
  </div>
  <div class="well">
    <h4>Disk Space Used</h4>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
        40%
      </div>
    </div>
    <h4>Bandwidth Used</h4>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        60%
      </div>
    </div>
  </div>
</div>