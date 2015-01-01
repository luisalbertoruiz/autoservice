@extends('layout.main')
@section('title')
Autoservice
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.navadmin')
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title"><span class="glyphicon glyphicon-user"></span> Vehículos<span><input name="{{ URL::to('/admin/vehiculo/buscar') }}" class="pull-right" type="text" placeholder="buscar" id="buscarajax"></span><span class="glyphicon glyphicon-search pull-right">&nbsp;</span></h2> 
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/vehiculo/crear'), 'Nuevo Vehículo', array('class' => 'btn btn-primary btn-sm pull-right')) }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Dueño</th>
							<th>Placas</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($vehiculos as $vehiculo)
						<tr>
							<td>{{ $vehiculo->id }}</td>
							<td>{{ $vehiculo->placas }}</td>
							<td>{{ $vehiculo->dueño }}</td>
							<td>{{ HTML::link(URL::to('/admin/vehiculo/mostrar/'.$vehiculo->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/vehiculo/editar/'.$vehiculo->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/vehiculo/eliminar/'.$vehiculo->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $vehiculos->links() }}
			</div>
		</div>
	</div>
</div>
@stop
@section('footer')
	@include('layout.footer')
@stop