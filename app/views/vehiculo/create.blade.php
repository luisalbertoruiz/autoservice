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
			<h2 class="panel-title"><span class="glyphicon glyphicon-user"> Nuevo Vehículo</span></h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/cliente/guardar')) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="cliente_id">ID de cliente</label>
						<input type="text" class="form-control" id="cliente_id" name="cliente_id" maxlength="5" required><br>
						<label for="placas">Placas</label>
						<input type="text" class="form-control" id="placas" name="placas" maxlength="8" required pattern="^[a-zA-Z0-9]*$"><br>
						<label for="marca">Marca</label>
						<select id="marca" name="marca" class="form-control">
							<option></option>
							@foreach($marcas as $marca)
								<option>{{$marca->nombre}}</option>
							@endforeach
						</select><br>
						<label for="smarca">SubMarca</label>
						<input type="text" class="form-control" id="smarca" name="smarca" maxlength="30"><br>
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="modelo">Modelo</label>
						<select id="marca" name="marca" class="form-control">
							<option></option>
							@for($i = 1980; $i < 2016; $i++)
								<option>{{$i}}</option>
							@endfor
						</select><br>
						<label for="color">Color</label>
						<select class="form-control" id="color" name="color">
							<option></option>
							<option value="">Blanco</option>
							<option value="">Negro</option>
							<option value="">Gris</option>
							<option value="">Rojo</option>
							<option value="">Azul</option>
							<option value="">Verde</option>
							<option value="">Plata</option>
							<option value="">Amarillo</option>
						</select><br>
						<label for="serie">Serie</label>
						<input type="text" class="form-control" id="serie" name="serie" maxlength="10" pattern="^[a-zA-Z0-9]*$"><br>
						<label for="nota">Nota</label>
						<input type="text" class="form-control" id="nota" name="nota" maxlength="200"><br>
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