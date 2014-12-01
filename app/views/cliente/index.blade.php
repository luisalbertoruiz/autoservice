@extends('layout.main')
@section('title')
Autoservice
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.nav')
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title"><span class="glyphicon glyphicon-th-large"> Clientes</h2>
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/cliente/crear'), 'Nuevo Cliente', array('class' => 'btn btn-primary btn-sm pull-right')) }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>RFC</th>
							<th>Teléfono</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($clientes as $cliente)
						<tr>
							<td>{{ $cliente->nombre }}</td>
							<td>{{ $cliente->rfc }}</td>
							<td>{{ $cliente->telefono }}</td>
							<td>{{ HTML::link(URL::to('/admin/cliente/mostrar/'.$cliente->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/cliente/editar/'.$cliente->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/cliente/eliminar/'.$cliente->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $clientes->links() }}
			</div>
		</div>
	</div>
</div>
@stop
@section('footer')
	@include('layout.footer')
@stop