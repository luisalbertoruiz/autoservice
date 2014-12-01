@extends('layout.main')
@section('title')
Autoservice
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.nav')
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title"><span class="glyphicon glyphicon-th-large"> Nuevo Cliente</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/cliente/guardar' }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="nombre">Nombre o Razón Social</label>
						<input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required value="{{ $cliente->nombre }}"><br>
						<label for="rfc">RFC</label>
						<input type="text" class="form-control" id="rfc" name="rfc" maxlength="13" required value="{{ $cliente->rfc }}"><br>
						<label for="calle">Calle y Número</label>
						<input type="text" class="form-control" id="calle" name="calle" maxlength="50" required value="{{ $cliente->calle }}"><br>
						<label for="colonia">Colonia</label>
						<input type="text" class="form-control" id="colonia" name="colonia" maxlength="30" required value="{{ $cliente->colonia }}"><br>
						<label for="localidad">Localidad</label>
						<input type="text" class="form-control" id="localidad" name="localidad" maxlength="30" required value="{{ $cliente->localidad }}"><br>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="cp">Código Postal</label>
						<input type="text" class="form-control" id="cp" name="cp" maxlength="5" required value="{{ $cliente->cp }}"><br>
						<label for="telefono">Teléfono</label>
						<input type="text" class="form-control" id="telefono" name="telefono" maxlength="10" required value="{{ $cliente->telefono }}"><br>
						<label for="celular">Celular</label>
						<input type="text" class="form-control" id="celular" name="celular" maxlength="10" required value="{{ $cliente->celular }}"><br>
						<label for="radio">Radio</label>
						<input type="text" class="form-control" id="radio" name="radio" maxlength="10" required value="{{ $cliente->radio }}"><br>
						<label for="email">eMail</label>
						<input type="text" class="form-control" id="email" name="email" maxlength="50" required value="{{ $cliente->email }}"><br>
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