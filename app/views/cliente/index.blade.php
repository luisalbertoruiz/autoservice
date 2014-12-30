@extends('layout.admin')
@section('title')
Autoservice
@stop
@section('body')
class="page-body page-fade-only"
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
			<a href="#"><i class="entypo-home"></i>Home</a>
		</li>
		<li>
			<a href="#">Administración</a>
		</li>
		<li class="active">
			<strong>Clientes</strong>
		</li>
		<a href="{{ URL::to('/cliente/crear')}}" class="btn btn-blue btn-icon pull-right">Nuevo<i class="entypo-plus"></i></a>
	</ol>
	<hr>
		<table class="table table-bordered datatable" id="tabla">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>RFC</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clientes as $cliente)
				<tr>
					<td>{{ $cliente->id }}</td>
					<td>{{ $cliente->nombre }}</td>
					<td>{{ $cliente->rfc }}</td>
					<td>
					<a href="{{URL::to('/cliente/mostrar/'.$cliente->id)}}" class="btn btn-success btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="ver datos"><i class="entypo-eye"></i></a>
					<a href="{{URL::to('/cliente/editar/'.$cliente->id)}}" class="btn btn-orange btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="editar datos"><i class="entypo-pencil"></i></a>
					<a href="{{URL::to('/cliente/eliminar/'.$cliente->id)}}" class="btn btn-danger btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="entypo-trash"></i></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>	
	</div>
</div>	
{{ HTML::script('js/jquery.dataTables.min.js',array('id'=>'script-resource-7')) }}
{{ HTML::script('js/dataTables.bootstrap.js',array('id'=>'script-resource-8')) }}
{{ HTML::script('js/neon-custom.js',array('id'=>'script-resource-11')) }}
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$("#tabla").dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
			"bStateSave": true
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>
@stop
