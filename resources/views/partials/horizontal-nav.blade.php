<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
      <div class="container">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="/">
            <img src="{{ asset('assets/images/laravel-blog-logo.svg') }}" alt="logo" />
            <span class="font-12 d-block font-weight-light">Laravel Blog </span>
          </a>
          <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <form action="/blog">
                <div class="input-group">
                  <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search">
                      <i class="mdi mdi-magnify"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search"  name="search" value="{{ request('search') }}"/>
                </div>
              </form>
            </li>
          </ul>
          @guest
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile">
              <a href="/login">
                <button class="btn btn-primary">Sign In</button>
              </a>
            </li>
          </ul>
          @endguest

          @auth
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile">
              <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Sign Out</button>
              </form>
            </li>
          </ul>
          @endauth
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </div>
    </nav>
    <nav class="bottom-navbar">
      <div class="container">
        <ul class="nav page-navigation justify-content-start">
          <li class="nav-item pr-md-4">
            <a class="nav-link" href="/">
              <i class="mdi mdi-compass-outline menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item pl-md-4 pr-md-4">
            <a href="/about" class="nav-link">
              <i class="mdi mdi-monitor-dashboard menu-icon"></i>
              <span class="menu-title">About</span>
            </a>
          </li>
          <li class="nav-item pl-md-4 pr-md-4">
            <a class="nav-link" href="/blog">
              <i class="mdi mdi-clipboard-text menu-icon"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li>
          <li class="nav-item d-none">
          </li>
        </ul>
      </div>
    </nav>
  </div>