<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile border-bottom">
        <a href="#" class="nav-link flex-column">
          <div class="nav-profile-image">
            <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile" />
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
            <span class="font-weight-semibold mb-1 mt-2 text-center">
                {{ auth()->user()->name }}
            </span>
          </div>
        </a>
      </li>
      <li class="nav-item pt-3">
        <a class="nav-link d-block" href="#">
          <img class="sidebar-brand-logo" src="{{ asset('assets/images/laravel-blog-logo.svg') }}"  alt="sidebar logo" />
          <img class="sidebar-brand-logomini" src="{{ asset('assets/images/logo-mini.svg') }}" alt="sidebar logo mini" />
          <div class="small font-weight-light pt-1">Responsive Dashboard</div>
        </a>
        <form class="d-flex align-items-center" action="#">
          <div class="input-group">
            <div class="input-group-prepend">
              <i class="input-group-text border-0 mdi mdi-magnify"></i>
            </div>
            <input type="text" class="form-control border-0" placeholder="Search" />
          </div>
        </form>
      </li>
      <li class="pt-2 pb-1">
        <span class="nav-item-head">Template Pages</span>
      </li>
      <li class="nav-item {{ Request::is('dashboard/home') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/home">
          <i class="mdi mdi-compass-outline menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/posts">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">My Posts</span>
        </a>
      </li>

    </ul>
  </nav>