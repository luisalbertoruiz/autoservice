@extends('layout.admin')
@section('title')
SGA | Presupuestos
@stop
@section('body')
class="page-body"
@stop
@section('content')
<?php $user = Sentry::getUser() ?>
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
			<a href="{{ URL::to('/admin')}}">Taller</a>
		</li>
		<li>
			<a href="{{ URL::to('/presupuestos')}}">Presupuestos</a>
		</li>
		<li class="active">
			<strong>Nuevo</strong>
		</li>
	</ol>
	<hr>
	<div class="well well-sm">
		<h4>Porfavor llena los campos para registrar un nuevo presupuesto.</h4>
	</div>
	<form id="rootwizard-2" method="post" action="{{ URL::to('/clientes/guardar') }}" class="form-wizard validate">
		<div class="steps-progress">
			<div class="progress-indicator"></div>
		</div>
		<ul>
			<li class="active">
				<a href="#tab2-1" data-toggle="tab"><span>1</span>Información General</a>
			</li>
			<li>
				<a href="#tab2-2" data-toggle="tab"><span>2</span>Mano de Obra</a>
			</li>
			<li>
				<a href="#tab2-3" data-toggle="tab"><span>3</span>Refacciones</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab2-1">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="cliente_id">Cliente</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-users"></i>
								</span>
								<select name="cliente_id" id="cliente_id" class="form-control" required>
									<option></option>
									@foreach($clientes as $cliente)
										<option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="vehiculo_id">Vehículo</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-map"></i>
								</span>
								<select name="vehiculo_id" id="vehiculo_id" class="form-control"required>
								<option value="">Selecciona un cliente...</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tab2-2">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="servicio_id_1">Servicios</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-users"></i>
								</span>
								<select name="servicio_id_1" id="servicio_id_1" class="form-control">
									<option></option>
									<option value="Motor">Motor</option>
									<option value="Dirección">Dirección</option>
									<option value="Suspensión">Suspensión</option>
									<option value="Sistema eléctrico">Sistema eléctrico</option>
									<option value="Frenos">Frenos</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="sservicio_id_1">subServicios</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-users"></i>
								</span>
								<select name="sservicio_id_1" id="sservicio_id_1" class="form-control">
									<option></option>
									
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="costo">Costo</label>
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control" id="costo" name="costo" maxlength="10" pattern="^\d+$">
								<span class="input-group-addon">.00</span>
							</div>
						</div>
					</div>
				</div>
				<div id="serviciosAdd"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<button type="button" id="btnLimpiarServ" class="btn btn-orange btn-icon">Limpiar<i class="entypo-minus"></i></button>
							<button type="button" id="btnAddServicio" class="btn btn-info btn-icon pull-right">Agregar<i class="entypo-plus"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tab2-3">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="servicio_id_1">Servicios</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-users"></i>
								</span>
								<select name="servicio_id_1" id="servicio_id_1" class="form-control">
									<option></option>
									<option value="Motor">Motor</option>
									<option value="Dirección">Dirección</option>
									<option value="Suspensión">Suspensión</option>
									<option value="Sistema eléctrico">Sistema eléctrico</option>
									<option value="Frenos">Frenos</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="sservicio_id_1">subServicios</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-users"></i>
								</span>
								<select name="sservicio_id_1" id="sservicio_id_1" class="form-control">
									<option></option>
									
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="costo">Costo</label>
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control" id="costo" name="costo" maxlength="10" pattern="^\d+$">
								<span class="input-group-addon">.00</span>
							</div>
						</div>
					</div>
				</div>
				<div id="refacionesAdd"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<button type="button" id="btnLimpiarRefac" class="btn btn-orange btn-icon">Limpiar<i class="entypo-minus"></i></button>
							<button type="button" id="btnAddRefac" class="btn btn-info btn-icon pull-right">Agregar<i class="entypo-plus"></i></button>
						</div>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<a class="btn btn-danger btn-icon icon-left" href='{{ URL::previous() }}'><i class="entypo-cancel">
							</i>Cancelar</a>
							<button type="submit" class="btn btn-success btn-icon pull-right">Registrar<i class="entypo-check"></i></button>
						</div>
					</div>
				</div>
			</div>
			<ul class="pager wizard">
				<li class="previous">
					<a href="#"><i class="entypo-left-open"></i> Previo</a>
				</li>
				<li class="next">
					<a href="#">Siguiente <i class="entypo-right-open"></i></a>
				</li>
			</ul>
		</div>
	{{ Form::close() }}
</div>		
@stop
@section('css')
{{ HTML::style('css/chosen.min.css') }}
@stop
@section('js')
{{ HTML::script('js/jquery.bootstrap.wizard.min.js') }}
{{ HTML::script('js/jquery.validate.min.js') }}
{{ HTML::script('js/chosen.jquery.min.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		var conteoS=2;
		$('#cliente_id').chosen();
		$('#rootwizard-2').validate();
		$('#cliente_id').change(function(event) {
			$('#vehiculo_id').empty();
			var id = $(this).val();
			$.get('{{URL::to("/presupuestos/dropdown")}}/'+id, function(data) {
				$('#vehiculo_id').append(data);
			});
		});
		$('#btnAddServicio').click(function(event) {
			$('#serviciosAdd').append('<div class="row" id="servicioRow_'+conteoS+'"><div class="col-md-4"><div class="form-group"><label for="servicio_id_'+conteoS+'">Servicios</label><div class="input-group"><span class="input-group-addon"><i class="entypo-users"></i></span><select name="servicio_id_'+conteoS+'" id="servicio_id_'+conteoS+'" class="form-control"><option></option><option value="Motor">Motor</option><option value="Dirección">Dirección</option><option value="Suspensión">Suspensión</option><option value="Sistema eléctrico">Sistema eléctrico</option><option value="Frenos">Frenos</option></select></div></div></div><div class="col-md-4"><div class="form-group"><label for="sservicio_id_'+conteoS+'">subServicios</label><div class="input-group"><span class="input-group-addon"><i class="entypo-users"></i></span><select name="sservicio_id_'+conteoS+'" id="sservicio_id_'+conteoS+'" class="form-control"><option></option></select></div></div></div><div class="col-md-4"><div class="form-group"><label for="costo_'+conteoS+'">Costo</label><div class="input-group"><span class="input-group-addon">$</span><input type="text" class="form-control" id="costo_'+conteoS+'" name="costo_'+conteoS+'" maxlength="10" value="'+conteoS+'"><span class="input-group-addon">.00</span></div></div></div></div>');
			conteoS ++;
		});
		$('#btnLimpiarServ').click(function(event) {
			if(conteoS > 2){
				conteoS --;
				$('#servicioRow_'+conteoS).remove();
			}
		});
	});
</script>
@stop
