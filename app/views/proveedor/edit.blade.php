@extends('layout.admin')
@section('title')
SGA | Proveedores
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
				<strong>Editar</strong>
			</li>
		</ol>
		<hr>
		<h2>Edición de Datos del Proveedor</h2>
		<form role="form" class="form-horizontal form-groups-bordered" method="post" action="{{ URL::to('/proveedores/actualizar/'.$proveedor->id) }}">
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Datos Generales
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="nombre" class="col-sm-3 control-label">Nombre o Razón Social</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-users"></i>
							</span>
							<input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required value="{{$proveedor->nombre}}">
						</div>
					</div>
					<div class="form-group">
						<label for="direccion" class="col-sm-3 control-label">Dirección</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-address"></i>
							</span>
							<input type="text" class="form-control" id="direccion" name="direccion" maxlength="60" value="{{$proveedor->direccion}}">
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Contacto
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="telefono" class="col-sm-3 control-label">Teléfono</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-phone"></i>
							</span>
							<input type="text" class="form-control" id="telefono" name="telefono" maxlength="10" pattern="^\d+$" value="{{$proveedor->telefono}}">
						</div>
					</div>
					<div class="form-group">
						<label for="celular" class="col-sm-3 control-label">Celular</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-mobile"></i>
							</span>
							<input type="text" class="form-control" id="celular" name="celular" maxlength="10" pattern="^\d+$" value="{{$proveedor->celular}}">
						</div>
					</div>
					<div class="form-group">
						<label for="radio" class="col-sm-3 control-label">Radio</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-network"></i>
							</span>
							<input type="text" class="form-control" id="radio" name="radio" maxlength="10" pattern="^\d+$" value="{{$proveedor->radio}}">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">eMail</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-mail"></i>
							</span>
							<input type="email" class="form-control" id="email" name="email" maxlength="50" value="{{$proveedor->email}}">
						</div>
					</div>
					<div class="form-group">
						<label for="pagina" class="col-sm-3 control-label">eMail</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-globe"></i>
							</span>
							<input type="pagina" class="form-control" id="pagina" name="pagina" maxlength="50" value="{{$proveedor->pagina}}">
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-body">
					<a class="btn btn-orange btn-icon icon-left" href='{{ URL::previous() }}'><i class="entypo-reply"></i>Regresar</a>
					<button type="submit" class="btn btn-success btn-icon pull-right">Cambiar<i class="entypo-pencil"></i></button>
				</div>
			</div>
		</form>
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