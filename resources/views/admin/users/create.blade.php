@extends('layouts.admin')

@section('title', 'Crear Usuario')

@section('content')
	<h1 class="page-header">Registrar Usuario</h1>

	{!! Form::open(array(
		'url'   => route('admin.users.store'),
		'files' => true,
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
	
		{{-- Email --}}
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			{!! Form::label('email', 'Correo electronico', ['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-9 col-md-6">
				{!! Form::email('email', old('email'), array(
					'class'            => 'form-control',
					'aria-describedby' => 'helpBlock2'
				)) !!}

				@if($errors->has('email'))
					<span id="helpBlock2" class="help-block">
					    <strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
			</div>
		</div>

		{{-- Password --}}
		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			{!! Form::label('password', 'Contraseña', ['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-9 col-md-6">
				{!! Form::password('password', array(
					'class'            => 'form-control',
					'aria-describedby' => 'helpBlock3'
				)) !!}

				@if($errors->has('password'))
					<span id="helpBlock3" class="help-block">
					    <strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</div>
		</div>

		{{-- Password Confirmation --}}
		<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
			{!! Form::label('password_confirmation', 'Confirmar contraseña', ['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-9 col-md-6">
				{!! Form::password('password_confirmation', array(
					'class'            => 'form-control',
					'aria-describedby' => 'helpBlock4'
				)) !!}

				@if($errors->has('password_confirmation'))
					<span id="helpBlock4" class="help-block">
					    <strong>{{ $errors->first('password_confirmation') }}</strong>
					</span>
				@endif
			</div>
		</div>

		{{-- Type --}}
		<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
			{!! Form::label('type', 'Tipo', ['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-9 col-md-6">
				{!! Form::select('type', 
					array(
						'member' => 'Miembro', 
						'admin'  => 'Administrador'
					), 
					null, 
					array(
						'class'            => 'form-control',
						'aria-describedby' => 'helpBlock5',
						'placeholder'      => 'Seleccione una opción'
					)) 
				!!}

				@if($errors->has('type'))
					<span id="helpBlock5" class="help-block">
					    <strong>{{ $errors->first('type') }}</strong>
					</span>
				@endif
			</div>
		</div>

		{{-- Avatar --}}
		<div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
			{!! Form::label('avatar', 'Imagen', ['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-9 col-md-6">
				{!! Form::file('avatar', array(
					'aria-describedby' => 'helpBlock6',
				)) !!}

				@if($errors->has('avatar'))
					<span id="helpBlock6" class="help-block">
					    <strong>{{ $errors->first('avatar') }}</strong>
					</span>
				@endif
			</div>
		</div>

		{{-- Submit --}}
		<div class="form-group">
			<div class="col-sm-9 col-md-6 col-sm-offset-3">
				{!! Form::button('Registrar', array(
					'type'  => 'submit',
					'class' => 'btn btn-success'
				)) !!}
			</div>
		</div>

	{!! Form::close() !!}
@endsection