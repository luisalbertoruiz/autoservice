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
							<legend>Inicia Seción</legend>
						{{ Form::open(array('url' => 'user/loged')) }} 
					    	<div class="form-group">
								{{ Form::label("username", "Usuario") }}
								{{ Form::text("username",'',array('class' => 'form-control')) }}<br>
								{{ Form::label("password", "Password") }}
								{{ Form::password("password",array('class' => 'form-control')) }}
							</div><br>
							{{ Form::button('Ingresar', array('type' => 'submit', 'class' => 'btn btn-success pull-right')) }}  
						{{ Form::close() }}<br><br><br><br>
					</div>
			  </div>
		</div>
	</div>
@stop
@section('footer')
	@include('layout.footer')
@stop
