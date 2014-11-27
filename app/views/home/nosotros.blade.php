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
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title">Vision</h3>
		  </div>
		  <div class="panel-body">
		  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet beatae eaque nesciunt fugit veritatis, quo asperiores quia excepturi explicabo, laborum, officiis repellendus sequi enim nostrum voluptatum! Ab molestiae, inventore dolore!
		  </div>
	</div>	
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title">Mision</h3>
		  </div>
		  <div class="panel-body">
		  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum aliquid quasi atque nesciunt odit, autem repellat, repellendus perferendis modi temporibus in veritatis ut ipsum, architecto. Odit voluptas incidunt inventore quaerat.
		  </div>
	</div>	
</div>
@stop
@section('footer')
	@include('layout.footer')
@stop