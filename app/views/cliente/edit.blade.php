@extends('layout.main')
@section('title')
Autoservice
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	
@stop
@section('content')
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title">Nuevo Cliente</h3>
		  </div>
		  <div class="panel-body">
		  <form action="" method="POST" role="form">
		  	<div class="form-group">
		  	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xs-offset-1">
		  		<label for="nombre">Nombre</label>
		  		<input type="text" class="form-control" id="nombre"  name="name"><br>
		  		<label for="apellido">Apellido</label>
		  		<input type="text" class="form-control" id="apellido" name="name"><br>
		  		<label for="calle">Calle</label>
		  		<input type="text" class="form-control" id="calle" name="name"><br>
		  		<label for="numero">Numero</label>
		  		<input type="text" class="form-control" id="numero" name="numero"><br>
		  		<label for="colonia">Colonia</label>
		  		<input type="text" class="form-control" id="colonia" name="colonia"><br>
		  		</div>
		  		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		  		<label for="localidad">Localidad</label>
		  		<input type="text" class="form-control" id="localidad" name="localidad"><br>
		  		<label for="cp">Codigo Postal</label>
		  		<input type="text" class="form-control" id="cp" name="cp"><br>
		  		<label for="telefono">Telefonor</label>
		  		<input type="text" class="form-control" id="telefono" name="telefono"><br>
		  		<label for="celular">Celular</label>
		  		<input type="text" class="form-control" id="celular" name="celular"><br>
		  		<label for="email">Email</label>
		  		<input type="text" class="form-control" id="email" name="email"><br>
		  		</div>
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		  </form>
		  </div>
	</div>	
</div>
@stop
@section('footer')
	@include('layout.footer')
@stop