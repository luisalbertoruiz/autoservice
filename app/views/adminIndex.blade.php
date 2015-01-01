@extends('layout.admin')
@section('title')
Autoservice
@stop
@section('body')
class="page-body page-fade-only"
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
			<li class="active">
				<strong>Administración</strong>
			</li>
		</ol>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="well">
					<h1><?php setlocale(LC_TIME, 'es_MX.UTF-8'); echo ucfirst(strftime('%B %d')) ?>, <?php echo date('Y') ?></h1><?php $user = Sentry::getUser() ?>
					<h3>Bienvenido al Sistema de Administración <strong>{{ $user->first_name.' '.$user->last_name }}</strong></h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<a href="{{ URL::to('/usuario') }}">
					<div class="tile-title tile-red">
						<div class="icon">
							<i class="fa fa-user"></i>
						</div>
						<div class="title">
							<h3>Usuarios</h3>
							<p>so far in our blog, and our website.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="{{ URL::to('/cliente') }}">
					<div class="tile-title tile-blue">
						<div class="icon">
							<i class="fa fa-users"></i>
						</div>
						<div class="title">
							<h3>Clientes</h3>
							<p>so far in our blog, and our website.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="{{ URL::to('/cliente') }}">
					<div class="tile-title tile-purple">
						<div class="icon">
							<i class="fa fa-truck"></i>
						</div>
						<div class="title">
							<h3>Vehiculos</h3>
							<p>so far in our blog, and our website.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="{{ URL::to('/cliente') }}">
					<div class="tile-title tile-cyan">
						<div class="icon">
							<i class="fa fa-tachometer"></i>
						</div>
						<div class="title">
							<h3>Taller</h3>
							<p>so far in our blog, and our website.</p>
						</div>
					</div>
				</a>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-3">
				<a href="{{ URL::to('/cliente') }}">
					<div class="tile-title tile-aqua">
						<div class="icon">
							<i class="fa fa-archive"></i>
						</div>
						<div class="title">
							<h3>Almacen</h3>
							<p>so far in our blog, and our website.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="{{ URL::to('/cliente') }}">
					<div class="tile-title tile-green">
						<div class="icon">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="title">
							<h3>Proveedores</h3>
							<p>so far in our blog, and our website.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="{{ URL::to('/cliente') }}">
					<div class="tile-title tile-primary">
						<div class="icon">
							<i class="fa fa-gears"></i>
						</div>
						<div class="title">
							<h3>Refacciones</h3>
							<p>so far in our blog, and our website.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="{{ URL::to('/cliente') }}">
					<div class="tile-title tile-orange">
						<div class="icon">
							<i class="fa fa-dollar"></i>
						</div>
						<div class="title">
							<h3>Presupuesto</h3>
							<p>so far in our blog, and our website.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
@stop
@section('css')
@stop
@section('js')
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
	});
</script>
@stop