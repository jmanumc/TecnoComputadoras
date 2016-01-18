@extends('layouts.admin')

@section('title', 'Categorias')

@section('content')
	<div class="page-header">
		<h1>
			Categorias <span class="label label-info"><i class="fa fa-hashtag"></i>{{ $categories->total() }}</span>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-12 form-group text-center">
			<a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
				<i class="fa fa-user"></i> Crear Categoria
			</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th colspan="2" class="text-center">Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->name }}</td>
						@include('admin.partials.accion', ['controller' => 'categories', 'data' => $category])
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{!! $categories->render() !!}
	</div>
@endsection