<!-- Sidebar-->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @auth
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            
        @endauth
        @guest
        <a href="#" class="d-block">Silahkan Login</a>
            
        @endguest
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{asset('template/index.html')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{asset('template/index2.html')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{asset('template/index3.html')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/home" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
            Homepage
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/film" class="nav-link">
            <i class="nav-icon fa fa-film"></i>
            <p>
            Movie
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Halaman
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/regist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form SignUp</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cast" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Cast</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/genre" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Genre</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Table
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/data-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Table</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item bg-danger">
            <a href="{{ route('logout') }}" class="nav-link"onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-id-card" aria-hidden="true"></i>
              <p>
              Logout
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>