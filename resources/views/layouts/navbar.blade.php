<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
        aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Admin<strong>CTRL</strong></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      @auth
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
          <a href="{{ url('dashboard') }}">Dashboard</a>
        </li>
        <li class="{{ Request::is('pages') ? 'active' : '' }}">
          <a href="{{ url('pages') }}">Pages</a>
        </li>
        <li class="{{ Request::is('posts') ? 'active' : '' }}">
          <a href="{{ url('posts') }}">Posts</a>
        </li>
        <li class="{{ Request::is('categories') ? 'active' : '' }}">
          <a href="{{ url('categories') }}">Categories</a>
        </li>
        {{--
        <li class="{{ Request::is('users') ? 'active' : '' }}">
          <a href="{{ url('users') }}">Users</a>
        </li> --}}
      </ul>
      @endauth
      <ul class="nav navbar-nav navbar-right">
        @auth
        <li>
          <a href="#">Welcome, {{ strtok(Auth::user()->name, ' ') }}</a>
        </li>
        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span>  Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
        @endauth
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</nav>