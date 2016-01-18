<ul class="nav nav-sidebar">
	<li><a href="#"><i class="fa fa-home fa-btn"></i>Inicio</a></li>
	<li class="{{ active('admin.users.index') }}">
		<a href="{{ route('admin.users.index') }}"><i class="fa fa-user fa-btn"></i>Usuarios</a>
	</li>
	<li class="{{ active('admin.categories.index') }}">
		<a href="{{ route('admin.categories.index') }}"><i class="fa fa-home fa-btn"></i>Categorias</a>
	</li>
</ul>