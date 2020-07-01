<!-- Sidebar -->
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="{{ url('/home') }}" class="simple-text logo-normal">
          Administrator
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ url('/home') }}">
              <i class="material-icons">dashboard</i>
              <p>{{ __('Dashboard') }}</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ Route('guru.index') }}">
              <i class="material-icons">people</i>
              <p>{{ __('Guru') }}</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ Route('kelas.index') }}">
              <i class="material-icons">meeting_room</i>
              <p>{{ __('Kelas') }}</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ Route('siswa.index') }}">
              <i class="material-icons">school</i>
              <p>{{ __('Siswa') }}</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ Route('ta.index') }}">
              <i class="material-icons">today</i>
              <p>{{ __('Tahun Ajaran') }}</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ Route('mata-pelajaran.index') }}">
              <i class="material-icons">import_contacts</i>
              <p>{{ __('Mata Pelajaran') }}</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ Route('mata-pelajaran-kelas.index') }}">
              <i class="material-icons">view_columnl</i>
              <p>Kelas / Mapel / Guru</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">@yield('judul')</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        @yield('content')
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            SISTEM INFORMASI AKADEMIK
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
          </div>
        </div>
      </footer>
    </div>
  </div>