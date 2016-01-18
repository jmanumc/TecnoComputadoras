<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Panel de administración de Tecno Computadoras">
	<meta name="author" content="JManuelMtz">
	<link rel="icon" href="{{ asset('favicon.ico') }}">

	<title>@yield('title', 'Panel de Administración - Tecno Computadoras')</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert.css') }}">
	<link href="{{ elixir('css/dashboard.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- header -->
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			@include('admin.partials.navbar')
		</nav>
	</header> <!-- / header -->

	<!-- content -->
	<section class="container-fluid">
		<div class="row row-offcanvas row-offcanvas-left">

			<!-- sidebar -->
			<aside id="sidebar" class="col-xs-6 col-sm-3 col-md-2 sidebar-offcanvas">
				@include('admin.partials.sidebar')
			</aside> <!-- / .sidebar -->

			<!-- main -->
			<main class="col-md-10 col-md-offset-2 main">
				<div class="offcanvas-btn hidden-md hidden-lg" data-toggle="offcanvas">
					<span></span>
					<span></span>
					<span></span>
				</div>
				@include('flash::message')
				@yield('content')
			</main> <!-- / main -->
			
		</div>
	</section> <!-- / .content -->

	<!-- Scripts
	================================================== -->
	<!-- JQuery & Bootstrap JS -->
	<script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
	<!-- Custom scripts for this template -->
	<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
	<script src="{{ elixir('js/dashboard.js') }}"></script>
</body>
</html>