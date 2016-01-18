<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">TCPA</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ url('/home') }}">Tecno Computadoras</a></li>
			<!-- Authentication Links -->
			@if (!Auth::guest())
			    <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			            {{ Auth::user()->name }} <span class="caret"></span>
			        </a>
			        <ul class="dropdown-menu" role="menu">
			            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesión</a></li>
			        </ul>
			    </li>
			@endif
		</ul>
	</div>
</div>