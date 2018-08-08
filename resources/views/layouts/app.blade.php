<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kano Startups Directory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('jquery.min.js') }}">

    
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    /* Set black background color, white text and some padding */

    body {
        background-color: white;
    }
    footer {
      background-color: black;
      
      padding: 15px;
    }
    
    .cont {
        height: 550px;
        background-color:white;
    }

    .wtf {
        background-color: black;
        
    }

    .card {
        border-radius: 10px;
    }
  </style>
</head>
<body>

 <nav class="navbar navbar-expand-md navbar-light navbar-laravel wtf">
            <div class="container">
            <img src = "{{ asset('pyr.png') }}" width = "50px" height = "50px"/>
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                Tech Kano
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <strong><a class="btn btn-info text-white" href="{{ url('blog') }}">Our Blog</a></string>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<br>
<div class="container text-center cont">   
 
    @yield('content')
</div>


<!-- <footer class="text-center text-white">
  <p>Copyright Kano Startups Directory</p>
</footer> -->

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT -->
</html>
