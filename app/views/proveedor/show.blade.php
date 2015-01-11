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
				<a href="{{ URL::to('/proveedores')}}">Proveedores</a>
			</li>
			<li class="active">
				<strong>Mostrar</strong>
			</li>
		</ol>
		<hr>
		<div class="profile-env">
			<header class="row">
				<div class="col-sm-2">
					<a href="#" class="profile-picture">
						{{ HTML::image('src/Hombre.png', '', array('class' => 'img-responsive img-circle','style' => 'max-width:115px'))}}
					</a>
				</div>
				<div class="col-sm-7">
					<ul class="profile-info-sections">
						<li>
							<div class="profile-stat">
								<h4>{{ $proveedor->id }}</h4>	
								<span>ID</span>
							</div>
						</li>
						<li>
							<div class="profile-stat">
								<h4>{{ $proveedor->nombre }}</h4>	
								<span>Nombre</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<div class="profile-buttons">
						<a href="{{URL::to('/proveedores/editar/'.$proveedor->id)}}" class="btn btn-default tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="editar">
							<i class="fa fa-edit"></i>
						</a>
						<a href="{{URL::to('/proveedores/eliminar/'.$proveedor->id)}}" class="btn btn-default tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="eliminar">
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
								<strong>{{ $proveedor->telefono }}</strong>
							</li>
							<li>
								<i class="entypo-mobile"></i>
								&nbsp;&nbsp;&nbsp;
								Celular:&nbsp;&nbsp;&nbsp;
								<strong>{{ $proveedor->celular }}</strong>
							</li>
							<li>
								<i class="entypo-network"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Radio:&nbsp;&nbsp;&nbsp;
								<strong>{{ $proveedor->radio }}</strong>
							</li>
							<li>
								<i class="entypo-mail"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								eMail:&nbsp;&nbsp;&nbsp;
								<strong>{{ $proveedor->email }}</strong>
							</li>
							<li>
								<i class="entypo-mail"></i>
								&nbsp;&nbsp;&nbsp;
								Página:&nbsp;&nbsp;&nbsp;
								<strong>{{ $proveedor->pagina }}</strong>
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
								<i class="entypo-address"></i>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Dirección:&nbsp;&nbsp;&nbsp;
								<strong>{{ $proveedor->direccion }}</strong>
							</li><br>
						</ul>
					</div>
					<hr>
					<div class="col-md-offset-7 col-md-5">
						<a class="btn btn-primary btn-icon icon-left pull-right" href='{{ URL::to('/proveedores')}}'><i class="entypo-reply"></i>Regresar</a>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@stop
