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
							<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#showUserModal" data-whatever="{{ route('admin.users.show', $user->id) }}">
								<i class="fa fa-eye"></i>
							</button>
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

	{{-- Modal Show User --}}
	<div class="modal fade" id="showUserModal" tabindex="-1" role="dialog" aria-labelledby="showUserModalLabel">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="showUserModalLabel">Name</h4>
				</div>
				<div class="modal-body text-center">
					<div class="thumbnail">
						<img src="#" alt="Name" class="user-avatar">
					</div>
					<h3 class="page-header user-email">E-Mail</h3>
					<p class="lead text-muted text-uppercase user-type">Type</p>
				</div>
			</div>
		</div>
	</div>
@endsection