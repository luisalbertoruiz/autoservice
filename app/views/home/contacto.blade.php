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
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title">Panel Principal</h3>
		  </div>
		  <div class="panel-body">
		  geolocalizacion
		  </div>
	</div>	
</div>
<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title">Panel title 1</h3>
		  </div>
		  <div class="panel-body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fugiat, at placeat, unde molestiae quo debitis illum sed voluptatibus omnis ullam. Fugiat molestias sed vero, laboriosam ducimus tempore recusandae delectus.
		  </div>
	</div>
</div>
	@include('home.sidebarb')
@stop
@section('footer')
	@include('layout.footer')
@stop