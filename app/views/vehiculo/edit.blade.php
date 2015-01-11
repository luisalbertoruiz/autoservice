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
				<strong>Editar</strong>
			</li>
		</ol>
		<hr>
		<h2>Edición de Datos del vehiculo</h2>
		<form role="form" class="form-horizontal form-groups-bordered" method="post" action="{{ URL::to('/vehiculos/actualizar/'.$vehiculo->id) }}">
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Información Específica
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="cliente_id" class="col-sm-3 control-label">Propietario</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-users"></i>
							</span>
							<select name="cliente_id" id="cliente_id" class="form-control" required>
								<option value="{{$vehiculo->cliente->id}}">{{$vehiculo->cliente->nombre}}</option>
								@foreach($clientes as $cliente)
									<option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="placas" class="col-sm-3 control-label">Placas</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-vcard"></i>
							</span>
							<input type="text" class="form-control" id="placas" name="placas" maxlength="13" required pattern="^[a-zA-Z0-9]*$" value="{{$vehiculo->placas}}">
						</div>
					</div>
					<div class="form-group">
						<label for="serie" class="col-sm-3 control-label">No. Serie</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-vcard"></i>
							</span>
							<input type="text" class="form-control" id="serie" name="serie" maxlength="16" pattern="^[a-zA-Z0-9]*$" value="{{$vehiculo->serie}}">
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Características
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="marca_id" class="col-sm-3 control-label">Marca</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-home"></i>
							</span>
							<select name="marca_id" id="marca_id" class="form-control">
								<option value="{{$vehiculo->marca->id}}">{{$vehiculo->marca->nombre}}</option>
								@foreach($marcas as $marca)
									<option value="{{$marca->id}}">{{$marca->nombre}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="smarca_id" class="col-sm-3 control-label">sub Marca</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-address"></i>
							</span>
							<select name="smarca_id" id="smarca_id" class="form-control" required>
								<option value="{{$vehiculo->smarca->id}}">{{$vehiculo->smarca->nombre}}</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="modelo" class="col-sm-3 control-label">Modelo</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-map"></i>
							</span>
							<select name="modelo" id="modelo" class="form-control">
								<option value="{{$vehiculo->modelo}}">{{$vehiculo->modelo}}</option>
									@for($i=1990;$i<=2015;$i++)
										<option value="{{$i}}">{{$i}}</option>
									@endfor
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="color_id" class="col-sm-3 control-label">Color</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-location"></i>
							</span>
							<select name="color_id" id="color_id" class="form-control">
								<option value="{{$vehiculo->color->id}}">{{$vehiculo->color->nombre}}</option>
								@foreach($colores as $color)
									<option value="{{$color->id}}">{{$color->nombre}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Comentario
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="nota" class="col-sm-3 control-label">Nota</label>
						<div class="input-group col-sm-5">
							<span class="input-group-addon">
								<i class="entypo-phone"></i>
							</span>
							<input type="text" class="form-control" id="nota" name="nota" maxlength="10" pattern="^\d+$" value="{{$vehiculo->nota}}">
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
{{ HTML::style('css/chosen.min.css') }}
@stop
@section('js')
{{ HTML::script('js/chosen.jquery.min.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('#cliente_id').chosen();
		$('#marca_id').change(function(event) {
			$('#smarca_id').empty();
			var id = $(this).val();
			$.get('{{URL::to("/dropdown")}}/'+id, function(data) {
				$.each(data, function(id, nombre) {
					$('#smarca_id').append('<option value="'+id+'">'+nombre+'</option>');
				});
			});
		});
	});
</script>
@stop