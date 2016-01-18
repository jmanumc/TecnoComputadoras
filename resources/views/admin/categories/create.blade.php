@extends('layouts.admin')

@section('title', 'Crear Categoria')

@section('content')
	<h1 class="page-header">Crear Categoria</h1>

	{!! Form::open(array(
		'url'   => route('admin.categories.store'),
		'class' => 'form-horizontal',
		'role'  => 'form'
	)) !!}
		
		{{-- Name --}}
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			{!! Form::label('name', 'Nombre', ['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-9 col-md-6">
				{!! Form::text('name', old('name'), array(
					'class'            => 'form-control',
					'aria-describedby' => 'helpBlock1'
				)) !!}

				@if($errors->has('name'))
					<span id="helpBlock1" class="help-block">
					    <strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif
			</div>
		</div>

		{{-- Submit --}}
		<div class="form-group">
			<div class="col-sm-9 col-md-6 col-sm-offset-3">
				{!! Form::button('Crear', array(
					'type'  => 'submit',
					'class' => 'btn btn-success'
				)) !!}
			</div>
		</div>

	{!! Form::close() !!}
@endsection