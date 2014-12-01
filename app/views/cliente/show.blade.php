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
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title"><span class="glyphicon glyphicon-th-large"> Cliente</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>{{ $cliente->nombre }}</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>RFC:</td>
							<td>{{$cliente->rfc}}</td>
						</tr>
						<tr>
							<td>Calle y Número:</td>
							<td>{{$cliente->calle}}</td>
						</tr>
						<tr>
							<td>Colonia:</td>
							<td>{{$cliente->colonia}}</td>
						</tr>
						<tr>
							<td>Localidad:</td>
							<td>{{$cliente->localidad}}</td>
						</tr>
						<tr>
							<td>Código Postal:</td>
							<td>{{$cliente->cp}}</td>
						</tr>
						<tr>
							<td>Teléfono:</td>
							<td>{{$cliente->telefono}}</td>
						</tr>
						<tr>
							<td>Celular:</td>
							<td>{{$cliente->celular}}</td>
						</tr>
						<tr>
							<td>Radio:</td>
							<td>{{$cliente->radio}}</td>
						</tr>
						<tr>
							<td>eMail:</td>
							<td>{{$cliente->email}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop
@section('footer')
	@include('layout.footer')
@stop