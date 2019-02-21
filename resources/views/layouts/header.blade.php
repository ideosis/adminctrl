<header id="header">
  <div class="container">
    <div class="row">
      @auth
      <div class="col-md-10">
        <h1>
          <span class="glyphicon glyphicon-@yield('pageIcon')" aria-hidden="true"></span> @yield('pageTitle')
          <small>@yield('pageSubtitle')</small>
        </h1>
      </div>
      <div class="col-md-2">
        <div class="dropdown create">
          <button class="btn btn-default dropdown-toggle" type="button" id="createContent" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="true">
            <span aria-hidden="true"></span> Create Content
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="createContent">
            <li>
              <a href="#" data-toggle="modal" data-target="#pageModal">
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> Add New Page</a>
            </li>
            <li role="separator" class="divider"></li>
            <li>
              <a href="#" data-toggle="modal" data-target="#postModal">
                <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Add New Post</a>
            </li>
            <li role="separator" class="divider"></li>
            <li>
              <a type="button" data-toggle="modal" data-target="#categoryModal">
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Add New Category</a>
            </li>
            {{-- <li role="separator" class="divider"></li>
            <li>
              <a type="button" data-toggle="modal" data-target="#userModal">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Add New User</a>
            </li> --}}
          </ul>
        </div>
      </div>
      @else
      <div class="col-md-12">
          <h1 class="text-center"> @yield('pageTitle') <small>@yield('pageSubtitle')</small></h1>
      </div>
      @endauth
    </div>
  </div>
</header>

{{--  Create Pages, Posts, Users  --}}
@include('pages.create')
@include('posts.create')
@include('users.create')
@include('categories.create')