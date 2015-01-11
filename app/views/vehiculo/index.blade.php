@extends('layout.admin')
@section('title')
SGA | Vehículos
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
		<li class="active">
			<strong>Vehiculos</strong>
		</li>
		<a href="{{ URL::to('/vehiculos/crear')}}" class="btn btn-blue btn-icon pull-right">Nuevo<i class="entypo-plus"></i></a>
	</ol>
	<hr>
		<table class="table table-bordered datatable" id="tabla">
			<thead>
				<tr>
					<th>Placas</th>
					<th>Sub-Marca</th>
					<th>Color</th>
					<th>Dueño</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($vehiculos as $vehiculo)
				<tr>
					<td>{{ $vehiculo->placas }}</td>
					<td>{{ $vehiculo->smarca->nombre }}</td>
					<td>{{ $vehiculo->color->nombre }}</td>
					<td>{{ $vehiculo->cliente->nombre }}</td>

					<td>
					<a href="{{URL::to('/vehiculos/mostrar/'.$vehiculo->id)}}" class="btn btn-success btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="mostrar"><i class="glyphicon glyphicon-eye-open"></i></a>
					<a href="{{URL::to('/vehiculos/editar/'.$vehiculo->id)}}" class="btn btn-orange btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="editar"><i class="fa fa-edit"></i></a>
					<a href="{{URL::to('/vehiculos/eliminar/'.$vehiculo->id)}}" class="btn btn-danger btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop
@section('css')
{{ HTML::style('js/datatables/responsive/css/datatables.responsive.css') }}
@stop
@section('js')
{{ HTML::script('js/jquery.dataTables.min.js') }}
{{ HTML::script('js/datatables/TableTools.min.js') }}
{{ HTML::script('js/dataTables.bootstrap.js') }}
{{ HTML::script('js/datatables/responsive/js/datatables.responsive.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$("#tabla").dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
			"bStateSave": true
		});
	});
</script>
@stop

