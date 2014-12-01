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
				<h3 class="panel-title"><span class="glyphicon glyphicon-pushpin"></span> Encuentranos en</h3>
		  </div>
		  <div class="panel-body">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.5932719847137!2d-99.0777!3d19.386756200000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fdb5132d159b%3A0x5241bc85f5a402f8!2sPlaza+Mayor%2C+Doctor+Alfonso+Ortiz+Tirado%2C+Ciudad+de+M%C3%A9xico%2C+D.F.!5e0!3m2!1ses-419!2smx!4v1417377388021" width="100%" height="400" frameborder="0" style="border:0"></iframe><br><br>
		  <p>Av. Plaza Mayor Nº 573, Col. Dr. Alfonso Ortiz Tirado Deleg. Iztapalapa, C.P. 09020 México, DF.</p>
		  </div>
	</div>	
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-phone-alt"></span> Contactanos</h3>
		  </div>
		  <div class="panel-body">
				<h4>Teléfonos:</h4>
				<p>3329-89-02</p>
				<p>3870-83-71</p>
				<h4>eMail:</h4>
				<p>autoservice-@hotmail.com</p>
		  </div>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-phone-alt"></span> Contactanos</h3>
		  </div>
		  <div class="panel-body">
				<h4>Teléfonos:</h4>
				<p>3329-89-02</p>
				<p>3870-83-71</p>
				<h4>eMail:</h4>
				<p>autoservice-@hotmail.com</p>
		  </div>
	</div>
</div>
@stop
@section('footer')
	@include('layout.footer')
@stop