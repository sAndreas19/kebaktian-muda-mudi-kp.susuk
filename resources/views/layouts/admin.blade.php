<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel Administrator KMKS MEDAN </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/fontastic.css') }}">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('admin_assets/img/icon.png') }}">
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="{{ asset('admin_assets/img/icon-user.png') }}" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Admin</h2><span>MEDAN</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="{{ route('admin.dashboard') }}" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">M</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Panel</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Master</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{ route('admin.dashboard') }}"> <i class="icon-home"></i>HOME</a></li>
                <li><a href="{{ route('admin.blog.create') }}">Posting News </a></li>
                <li><a href="{{ route('admin.blog.index') }}">Daftar News</a></li>
                <li><a href="{{ route('admin.jadwal.create') }}">Tambah Jadwal</a></li>
                <li><a href="{{ route('admin.jadwal.index') }}">Daftar Jadwal</a></li>
                <li><a href="{{ route('admin.kegiatan.create') }}">Tambah Kegiatan</a></li>
                <li><a href="{{ route('admin.kegiatan.index') }}">Daftar Kegiatan</a></li>
                <li><a href="{{ route('admin.renungan.create') }}">Input Renungan</a></li>
                <li><a href="{{ route('admin.renungan.index') }}">Daftar Renungan</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Pesan</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="{{ route('admin.pesan.index') }}"> <i class="icon-screen"> </i>Pesan Masuk</a></li>
            <li> <a href="{{ route('admin.pesan.read') }}"> <i class="icon-screen"> </i>Pesan Telah Dibaca</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="{{ route('admin.dashboard') }}" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-primary">KMKS MEDAN</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Log out-->
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="nav-link logout bg-transparent border-0" style="cursor:pointer;"> <span class="d-none d-sm-inline-block">Keluar</span><i class="fa fa-sign-out"></i></button>
                    </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      @yield('content')

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>KMKS MEDAN&copy; {{ date('Y') }}</p>
            </div>
            <div class="col-sm-6 text-right">
              
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admin_assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('admin_assets/js/front.js') }}"></script>
    @stack('scripts')
  </body>
</html>