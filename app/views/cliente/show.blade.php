@extends('layout.admin')
@section('title')
Autoservice
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
				<a href="{{ URL::to('/clientes')}}">Clientes</a>
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
								<h4>{{ $cliente->id }}</h4>
								<span>ID</span>
							</div>
						</li>
						<li>
							<div class="profile-stat">
								<h4>{{ $cliente->nombre }}</h4>
								<span>Nombre</span>
							</div>
						</li>
						<li>
							<div class="profile-stat">
								<h4>{{ $cliente->rfc }}</h4>
								<span>RFC</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-sm-2">
					<div class="profile-buttons">
						<a href="{{URL::to('/clientes/editar/'.$cliente->id)}}" class="btn btn-default tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="editar">
							<i class="fa fa-edit"></i>
						</a>
						<a href="{{URL::to('/clientes/eliminar/'.$cliente->id)}}" class="btn btn-default tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="eliminar">
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
								&nbsp;
								Telefono:&nbsp;&nbsp;
								<strong>{{ $cliente->telefono }}</strong>
							</li>
							<li>
								<i class="entypo-mobile"></i>
								&nbsp;&nbsp;&nbsp;
								Celular:&nbsp;&nbsp;&nbsp;
								<strong>{{ $cliente->celular }}</strong>
							</li>
							<li>
								<i class="entypo-network"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Radio:&nbsp;&nbsp;&nbsp;
								<strong>{{ $cliente->radio }}</strong>
							</li>
							<li>
								<i class="entypo-mail"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								eMail:&nbsp;&nbsp;&nbsp;
								<strong>{{ $cliente->email }}</strong>
							</li>
						</ul>
						<!-- tabs for the profile links -->
						<ul class="nav nav-tabs">
							<li class="active"><a>Dirección</a></li>
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
								Calle y No:&nbsp;&nbsp;&nbsp;
								<strong>{{ $cliente->calle }}</strong>
							</li><br>
							<li>
								<i class="entypo-address"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Colonia:&nbsp;&nbsp;&nbsp;
								<strong>{{ $cliente->colonia }}</strong>
							</li><br>
							<li>
								<i class="entypo-map"></i>
								&nbsp;&nbsp;
								Localidad:&nbsp;&nbsp;&nbsp;
								<strong>{{ $cliente->localidad }}</strong>
							</li><br>
							<li>
								<i class="entypo-location"></i>
								&nbsp;&nbsp;&nbsp;
								Cod Pos:&nbsp;&nbsp;&nbsp;
								<strong>{{ $cliente->cp }}</strong>
							</li>
						</ul>
					</div>
					<hr>
					<div class="col-md-offset-7 col-md-5">
						<a class="btn btn-primary btn-icon icon-left pull-right" href='{{ URL::to('/clientes')}}'><i class="entypo-reply"></i>Regresar</a>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@stop
