@extends('layout.main')
@section('title')
Autoservice
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.navadmin')
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title"><span class="glyphicon glyphicon-th-large"> Nuevo Usuario</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/usuario/guardar')) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="username">Nombre de Usuario</label>
						<input type="text" class="form-control" id="username" name="username" maxlength="16" required><br>
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" maxlength="16" required><br>
						<label for="verificar">Verificar Password</label>
						<input type="text" class="form-control" id="verificar" name="verificar" maxlength="16" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required><br>
						<label for="apellido">Apellido</label>
						<input type="text" class="form-control" id="apellido" name="apellido" maxlength="30" required><br>
						<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" class="form-control">
							<option></option>
							<option value="Administrador">Administrador</option>
							<option value="Estandar">Estandar</option>
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Registrar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop
@section('footer')
	@include('layout.footer')
@stop