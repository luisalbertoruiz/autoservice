@extends('layout.admin')
@section('title')
SGA | Vehículos
@stop
@section('body')
class="page-body"
@stop
@section('content')
<div class="page-container">	
	@include('layout.sidebarMenu')
	<div class="main-content">
		@include('layout.profilebar')
		<hr>
		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ URL::to('/')}}"><i class="entypo-home"></i>Home</a>
			</li>
			<li>
				<a href="{{ URL::to('/admin')}}">Administración</a>
			</li>
			<li>
				<a href="{{ URL::to('/vehiculos')}}">Vehículos</a>
			</li>
			<li class="active">
				<strong>Mostrar</strong>
			</li>
		</ol>
		<hr>
		<div class="profile-env">
			<header class="row">
				<div class="col-sm-2">
					<a class="profile-picture">
						{{ HTML::image('src/Hombre.png', '', array('class' => 'img-responsive img-circle','style' => 'max-width:115px'))}}
					</a>
				</div>
				<div class="col-sm-8">
					<ul class="profile-info-sections">
						<li>
							<div class="profile-stat">
								<h4>{{ $vehiculo->cliente->nombre }}</h4>
								<span>Propietario</span>
							</div>
						</li>
						<li>
							<div class="profile-stat">
								<h4>{{ $vehiculo->placas }}</h4>
								<span>Placas</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-sm-2">
					<div class="profile-buttons">
						<a href="{{URL::to('/vehiculos/editar/'.$vehiculo->id)}}" class="btn btn-default tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="editar">
							<i class="fa fa-edit"></i>
						</a>
						<a href="{{URL::to('/vehiculos/eliminar/'.$vehiculo->id)}}" class="btn btn-default tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="eliminar">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
					</div>
				</div>
			</header>
			<section class="profile-info-tabs">
				<div class="row">
					<div class="col-sm-offset-2 col-sm-10">
						<ul class="user-details">
							<li>
								<i class="entypo-phone"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;
								Marca:&nbsp;&nbsp;
								<strong>{{ $vehiculo->marca->nombre }}</strong>
							</li>
							<li>
								<i class="entypo-mobile"></i>
								&nbsp;&nbsp;&nbsp;
								sub Marca:&nbsp;&nbsp;&nbsp;
								<strong>{{ $vehiculo->smarca->nombre }}</strong>
							</li>
							<li>
								<i class="entypo-network"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;
								Modelo:&nbsp;&nbsp;&nbsp;
								<strong>{{ $vehiculo->modelo }}</strong>
							</li>
							<li>
								<i class="entypo-mail"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;
								Color:&nbsp;&nbsp;&nbsp;
								<strong>{{ $vehiculo->color->nombre }}</strong>
							</li>
							<li>
								<i class="entypo-mail"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;
								Serie:&nbsp;&nbsp;&nbsp;
								<strong>{{ $vehiculo->serie }}</strong>
							</li>
						</ul>
						<!-- tabs for the profile links -->
						<ul class="nav nav-tabs">
							<li class="active"><a>Comentarios</a></li>
						</ul>
					</div>
				</div>
			</section>
			<section>
				<div class="row">
					<div class="col-sm-offset-1 col-sm-11">
						<ul class="user-details" style="list-style:none">
							<li>
								
								<i class="entypo-home"></i>
								&nbsp;
								Nota:&nbsp;&nbsp;&nbsp;
								<strong>{{ $vehiculo->nota }}</strong>
							</li><br>
						</ul>
					</div>
					<hr>
					<div class="col-md-offset-7 col-md-5">
						<a class="btn btn-primary btn-icon icon-left pull-right" href='{{ URL::to('/vehiculos')}}'><i class="entypo-reply"></i>Regresar</a>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@stop
