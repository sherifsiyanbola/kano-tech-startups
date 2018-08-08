<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('ass/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('ass/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('ass/css/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('ass/css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('ass/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('ass/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('ass/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <style>
        </style>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="{{ asset ('ass/img/avatar-1.jpg') }}" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5"></h2><span>Kano Tech Startups Directory</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="/" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Quick Links</h5>
            </li>
            
            <li> <a href="#"> <i class="icon-mail"></i>Notifications
                <div class="badge badge-warning">6 New</div></a>
            </li>
            <li><a href="{{url('admin/create')}}"> <i class="icon-interface-windows"></i>Add startup</a></li>
            <li><a href="{{url('admin')}}"> <i class="icon-interface-windows"></i>View All tech startups</a></li>
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Admin</span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">{{ __('Logout') }}</a>
                  
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    
    @csrf
                </form>
              </ul>
            </div>
          </div>
        </nav>
      </header>
 <div class = "container">
 @yield('content')
 </div>
      
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Kano Tech Startups Directory &copy; 2018</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Powered by <a href="#" class="external">Reboot Technologies</a></p>
              
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('ass/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('ass/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('ass/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ass/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ asset('ass/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('ass/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('ass/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('ass/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('ass/js/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('ass/js/front.js') }}"></script>

    
  </body>
</html>