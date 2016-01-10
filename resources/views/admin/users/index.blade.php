@extends('layouts.admin')

@section('title', 'Usuarios')

@section('content')
	<div class="page-header clearfix">
		<h1 class="inline-block">Usuarios <small>- {{ $users->total() }} Registros</small></h1>
		<a href="{{ route('admin.users.create') }}" class="btn btn-primary pull-right">
			<i class="fa fa-user"></i> Registar Usuario
		</a>
	</div>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Correo Electronico</th>
					<th>Tipo</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->type }}</td>
						<td>
							@include('admin.partials.accion', ['controller' => 'users', 'data' => $user])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<center>
		{!! $users->render() !!}
	</center>
@endsection