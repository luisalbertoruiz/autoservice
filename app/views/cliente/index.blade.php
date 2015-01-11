@extends('layout.admin')
@section('title')
SGA | Clientes
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
			<strong>Clientes</strong>
		</li>
		<a href="{{ URL::to('/clientes/crear')}}" class="btn btn-blue btn-icon pull-right">Nuevo<i class="entypo-plus"></i></a>
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
					<a href="{{URL::to('/clientes/mostrar/'.$cliente->id)}}" class="btn btn-success btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="mostrar"><i class="glyphicon glyphicon-eye-open"></i></a>
					<a href="{{URL::to('/clientes/editar/'.$cliente->id)}}" class="btn btn-orange btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="editar"><i class="fa fa-edit"></i></a>
					<a href="javascript:;" onclick="eliminaRegistro('{{URL::to('/clientes/eliminar/'.$cliente->id)}}');" class="btn btn-danger btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
function eliminaRegistro(href)
{
	jQuery('#eliminarR').find('.modal-footer').append('<a href="'+href+'" class="btn btn-danger">Eliminar</button></a>');
	jQuery('#eliminarR').modal('show', {backdrop: 'static'});
	
}
</script>
<div class="modal fade" id="eliminarR">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">¡Cuidado!</h3>
			</div>
			
			<div class="modal-body">
				<h4>Estas seguro de eliminar el registro</h4>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
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
			"aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "Todo"]]
		});
	});
</script>
@stop

