@extends('layout.admin')
@section('title')
SGA | Servicios
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
			<a href="{{ URL::to('/admin')}}">Catálogos</a>
		</li>
		<li class="active">
			<strong>Servicios</strong>
		</li>
		<a href="javascript:;" onclick="nuevoColor();" class="btn btn-blue btn-icon pull-right">Nuevo<i class="entypo-plus"></i></a>
	</ol>
	<hr>
		<table class="table table-bordered datatable" id="tabla">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($servicios as $servicio)
				<tr>
					<td>{{ $servicio->nombre }}</td>
					<td>
					<a href="javascript:;" class="btn btn-orange btn-xs tooltip-primary" onclick="editarColor('{{URL::to('/servicios/editar/'.$servicio->id)}}');" data-toggle="tooltip" data-placement="top" data-original-title="editar"><i class="fa fa-edit"></i></a>
					<a href="{{URL::to('/servicios/eliminar/'.$servicio->id)}}" class="btn btn-danger btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
function nuevoColor()
{
	jQuery('#modal-7').modal('show', {backdrop: 'static'});
	jQuery.ajax({
		url: "{{URL::to('/servicios/crear')}}",
		success: function(response)
		{
			jQuery('#modal-7 .modal-body').html(response);
		}
	});
}

function editarColor(href)
{
	jQuery('#modal-8').modal('show', {backdrop: 'static'});
	jQuery.ajax({
		url: href,
		success: function(response)
		{
			jQuery('#modal-8 .modal-body').html(response);
		}
	});
}
</script>
<div class="modal fade" id="modal-7">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Nuevo Servicio</h4>
			</div>
			<div class="modal-body">
				Content is loading...
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-8">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Editar Servicio</h4>
			</div>
			<div class="modal-body">
				Content is loading...
			</div>
		</div>
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
			"aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "Todo"]],
			"bStateSave": true
		});
	});
</script>
@stop
