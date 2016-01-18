<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Tecno Computadoras">
	<meta name="author" content="JManuelMtz">
	<link rel="icon" href="{{ asset('favicon.ico') }}">

	<title>Tecno Computadoras</title>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

	<!-- Fonts & Icos -->
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ elixir('css/app.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row-offcanvas row-offcanvas-left">

		<!-- header -->
		<header class="main"  style="background-image: url({{ asset('images/background.jpg') }})">
			<nav class="navbar navbar-default navbar-fixed-top">
				@include('blog.partials.navbar')
			</nav>
			<section class="jumbotron custimize text-center text-uppercase">
				<div class="container">
					<h1 class="jumbotron-heading">Bienvenido</h1>
					<p>Blog de software</p>
				</div>
			</section>
		</header> <!-- / header -->
		
		<!-- Content -->
		<section class="main container">
			<div class="row">
		
				<!-- main -->
				<main class="main">
					@yield('content')
				</main> <!-- / main -->
		
				<!-- sidebar -->
				<aside class="main col-md-4 sidebar-offcanvas">
					<div class="wrapper">
						@include('blog.partials.sidebar')
					</div>
				</aside> <!-- / .sidebar -->
		
			</div>
		</section> <!-- / .content -->

	</div>

	<!-- Scripts
	================================================== -->
	<!-- JQuery & Bootstrap JS -->
	<script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
	<script src="{{ elixir('js/blog.js') }}"></script>
</body>
</html>
