<nav class="navbar navbar-default" style="border-radius:0px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            {{ config('app.name') }}
        </a>
      </div>
  
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="{{ set_active('home') }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ set_active('about') }}"><a href=" {{ route('about') }} ">About</a></li>
            <li><a href="#">Artisans</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Planet <span class="caret"></span>
                </a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="https://laravel.com" target="_BLANK">Laravel.com</a></li>
                  <li><a href="https://laravel.io" target="_BLANK">Laravel.io</a></li>
                  <li><a href="https://laracasts.com" target="_BLANK">Laracasts</a></li>
                  <li><a href="https://larajobs.com" target="_BLANK">Laravel News</a></li>
                  <li><a href="https://larachat.com" target="_BLANK">Larachat</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="search" size="60" class="form-control" placeholder="Search">
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>