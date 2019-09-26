<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halo Tendik</title>

  <!-- Font Awesome Icons -->
  <link href="{{URL::asset('dist/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{URL::asset('dist/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{URL::asset('dist/css/creative.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Halo Tendik</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          @if (Auth::guest())
	            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/login') }}">Login</a></li>
	            {{-- <li><a class="nav-link js-scroll-trigger" href="{{ url('/register') }}">Register</a></li> --}}
	        @else
	            <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                    {{ Auth::user()->name }} <span class="caret"></span>
	                </a>

	                <ul class="dropdown-menu" role="menu">
	                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
	                </ul>
	            </li>
	        @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  @yield('content')

  <!-- Bootstrap core JavaScript -->
  <script src="{{URL::asset('dist/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{URL::asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{URL::asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{URL::asset('dist/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{URL::asset('dist/js/creative.min.js') }}"></script>

</body>

</html>
