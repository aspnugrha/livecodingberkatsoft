<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/assets//img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets//img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          <form action="/logout" method="post" class="d-inline">
            @csrf
            <button class="btn btn-sm btn-danger"><i class="fa fa-sign-out"></i> Logout</button>
          </form>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ ($active == 'dash')? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/now_playing" class="nav-link {{ ($active == 'nowplaying')? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Now Playing
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/popular" class="nav-link {{ ($active == 'popular')? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Popular
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/top_rated" class="nav-link {{ ($active == 'toprated')? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Top Rated
                  </p>
                </a>
              </li>
          
          <li class="nav-item">
            <a href="/up_coming" class="nav-link {{ ($active === 'upcoming')? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Up Coming
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>