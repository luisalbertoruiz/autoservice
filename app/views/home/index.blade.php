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
	@include('home.slider')
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-film"></span> Conocenos</h3>
			</div>
			<div class="panel-body">
				<video width="100%" controls>
					<source src="mov_bbb.mp4" type="video/mp4">
					<source src="mov_bbb.ogg" type="video/ogg">
					Your browser does not support HTML5 video.
				</video>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
		<div class="panel panel-primary">
			  <div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-star"></span> Nuestros Clientes</h3>
			  </div>
			  <div class="panel-body">
					<ul>
						<li>CITELUM México </li>
						<li>CCL LABEL México </li>
						<li>Grupo Gama Impresores </li>
						<li>Policia Federal </li>
						<li>Surtidora Grafica S.A de C.V</li>
					</ul>
			  </div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
		<div class="panel panel-primary">
			  <div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-tint"></span> Trabajamos con</h3>
			  </div>
			  <div class="panel-body">
					<ul>
						<li>Motorcraf</li>
						<li>Luk</li>
						<li>Boosh</li>
						<li>Luequie Molie</li>
					</ul>
			  </div>
		</div>
	</div>
@stop
@section('footer')
	@include('layout.footer')
@stop
