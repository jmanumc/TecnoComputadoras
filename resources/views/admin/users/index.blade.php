@extends('layouts.admin')

@section('title', 'Usuarios')

@section('content')
	<div class="page-header">
		<h1>
			Usuarios <span class="label label-info"><i class="fa fa-hashtag"></i>{{ $users->total() }}</span>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-12 form-group text-center">
			<a href="{{ route('admin.users.create') }}" class="btn btn-primary">
				<i class="fa fa-user"></i> Registar Usuario
			</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Correo Electronico</th>
					<th>Tipo</th>
					<th colspan="3" class="text-center">Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->type }}</td>
						<td class="text-center">
							<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#showUserModal" data-whatever="{{ route('admin.users.show', $user->id) }}">
								<i class="fa fa-eye"></i>
							</button>
						</td>
						@include('admin.partials.accion', ['controller' => 'users', 'data' => $user])
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{!! $users->render() !!}
	</div>

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