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
	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-sm-offset-2 col-md-offset-3">
		<div class="panel panel-primary">
			  
			  <div class="panel-body">
				  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2">
						<form action="" method="POST" role="form">
							<legend>Inicia Seción</legend>
						
							<div class="form-group">
								<label for="user">Usuario</label>
								<input type="text" class="form-control" id="user" name="user"><br><br>
								<label for="pass">Contraseña</label>
								<input type="pass" class="form-control" id="pass" name="pass"><br>
							</div>
							<button type="submit" class="btn btn-primary pull-right">Entrar</button>
						</form><br><br><br>
					</div>
			  </div>
		</div>
	</div>
@stop
@section('footer')
	@include('layout.footer')
@stop
