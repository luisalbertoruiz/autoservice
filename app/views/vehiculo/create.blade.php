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
			<a href="{{ URL::to('/vehiculos')}}">Vehiculos</a>
		</li>
		<li class="active">
			<strong>Nuevo</strong>
		</li>
	</ol>
	<hr>
	<div class="well well-sm">
		<h4>Porfavor llena los campos para registrar un nuevo vehiculo.</h4>
	</div>
	<form id="rootwizard-2" method="post" action="{{ URL::to('/vehiculos/guardar') }}" class="form-wizard validate">
		<div class="steps-progress">
			<div class="progress-indicator"></div>
		</div>
		<ul>
			<li class="active">
				<a href="#tab2-1" data-toggle="tab"><span>1</span>Información Específica</a>
			</li>
			<li>
				<a href="#tab2-2" data-toggle="tab"><span>2</span>Características</a>
			</li>
			<li>
				<a href="#tab2-3" data-toggle="tab"><span>3</span>Comentarios</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab2-1">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="cliente_id">propietario</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-users"></i>
								</span>
								<select name="cliente_id" id="nombre_chz" class="form-control" required>
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
							<label for="placas">Placas</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-vcard"></i>
								</span>
								<input type="text" class="form-control" id="placas" name="placas" maxlength="8" required pattern="^[a-zA-Z0-9]*$">
							</div>
						</div>
					</div>
					<div class="col-md-6 pull-right">
						<div class="form-group">
							<label for="serie">No. Serie</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-vcard"></i>
								</span>
								<input type="text" class="form-control" id="serie" name="serie" maxlength="16"pattern="^[a-zA-Z0-9]*$">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tab2-2">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="marca_id">Marca</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-home"></i>
								</span>
								<select name="marca_id" id="marca_id" class="form-control" required>
									<option></option>
									@foreach($marcas as $marca)
										<option value="{{$marca->id}}">{{$marca->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="modelo">Modelo</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-address"></i>
								</span>
								<select name="modelo" id="modelo" class="form-control" required>
									<option></option>
									@for($i=1990;$i <= $maxModelo; $i++)
										<option value="{{$i}}">{{$i}}</option>
									@endfor
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="smarca_id">Sub-marca</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-map"></i>
								</span>
								<select name="smarca_id" id="smarca_id" class="form-control" required>
									<option value="" default selected>seleciona una marca</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="color_id">Color</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="entypo-location"></i>
								</span>
								<select id="color_id" name="color_id" class="form-control" required>
									<option value=""></option>
									@foreach($colores as $color)
									<option value="{{$color->id}}">{{$color->nombre}}</option>
								@endforeach
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tab2-3">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="form-group">
							<label for="nota"><i class="entypo-location"></i>&nbsp;Comentarios</label><br>
							<textarea name="nota" id="nota" cols="83" rows="8" style="resize:none" maxlength="320"></textarea>
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
		$('#nombre_chz').chosen();
		$('#rootwizard-2').validate();
		$('#marca_id').change(function(event) {
			$('#smarca_id').empty();
			var id = $(this).val();
			$.get('{{URL::to("/vehiculos/dropdown")}}/'+id, function(data) {
				$.each(data, function(id, nombre) {
					$('#smarca_id').append('<option value="'+id+'">'+nombre+'</option>');
				});
			});
		});
	});
</script>
@stop

