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

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="{{ elixir('css/dashboard.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	@include('admin.partials.navbar')

	<div class="container-fluid">
		<div class="row row-offcanvas row-offcanvas-left">
			<div id="sidebar" class="col-xs-6 col-sm-3 col-md-2 sidebar-offcanvas">

				@include('admin.partials.sidebar')

			</div>
			<div class="col-md-10 col-md-offset-2 main">
				<div class="offcanvas-btn hidden-md hidden-lg" data-toggle="offcanvas">
					<span></span>
					<span></span>
					<span></span>
				</div>
				
				@include('flash::message')
				@yield('content')
				
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{ asset('assets/js/vendor/jquery.min.js') }}"><\/script>')</script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
	<script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>