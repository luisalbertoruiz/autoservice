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
				<a href="{{ URL::to('/cliente')}}">Clientes</a>
			</li>
			<li class="active">
				<strong>Editar</strong>
			</li>
		</ol>
		<hr>
		<h2>Edición de Datos del Cliente</h2>
		<form role="form" class="form-horizontal form-groups-bordered" method="post" action="{{ URL::to('/cliente/actualizar/'.$cliente->id) }}">
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Datos Personales
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
							<input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required value="{{$cliente->nombre}}">
						</div>
					</div>
					<div class="form-group">
						<label for="rfc" class="col-sm-3 control-label">RFC</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-vcard"></i>
							</span>
							<input type="text" class="form-control" id="rfc" name="rfc" maxlength="13" required pattern="^[a-zA-Z0-9]*$" value="{{$cliente->rfc}}">
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Dirección
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="calle" class="col-sm-3 control-label">Calle y Número</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-home"></i>
							</span>
							<input type="text" class="form-control" id="calle" name="calle" maxlength="50" value="{{$cliente->calle}}">
						</div>
					</div>
					<div class="form-group">
						<label for="colonia" class="col-sm-3 control-label">Colonia</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-address"></i>
							</span>
							<input type="text" class="form-control" id="colonia" name="colonia" maxlength="30" value="{{$cliente->colonia}}">
						</div>
					</div>
					<div class="form-group">
						<label for="localidad" class="col-sm-3 control-label">Localidad</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-map"></i>
							</span>
							<input type="text" class="form-control" id="localidad" name="localidad" maxlength="30" value="{{$cliente->localidad}}">
						</div>
					</div>
					<div class="form-group">
						<label for="cp" class="col-sm-3 control-label">Código Postal</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-location"></i>
							</span>
							<input type="text" class="form-control" id="cp" name="cp" maxlength="5" pattern="^[0-9]{5}" value="{{$cliente->cp}}">
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
							<input type="text" class="form-control" id="telefono" name="telefono" maxlength="10" pattern="^\d+$" value="{{$cliente->telefono}}">
						</div>
					</div>
					<div class="form-group">
						<label for="celular" class="col-sm-3 control-label">Celular</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-mobile"></i>
							</span>
							<input type="text" class="form-control" id="celular" name="celular" maxlength="10" pattern="^\d+$" value="{{$cliente->celular}}">
						</div>
					</div>
					<div class="form-group">
						<label for="radio" class="col-sm-3 control-label">Radio</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="fa fa-phone-square"></i>
							</span>
							<input type="text" class="form-control" id="radio" name="radio" maxlength="10" pattern="^\d+$" value="{{$cliente->radio}}">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">eMail</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-mail"></i>
							</span>
							<input type="email" class="form-control" id="email" name="email" maxlength="50" value="{{$cliente->email}}">
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