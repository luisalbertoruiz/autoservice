@extends('layout.main')
@section('title')
Autoservice
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	
@stop
@section('content')
<div  clase = " col-xs-12 col-sm-12 col-md-10 col-lg-8 offset-col-md-1-col-lg offset-2 " >
	<div  clase = " panel principal del panel " >
		<div  clase = " Panel-encabezamiento " >
			<h2  clase = " Panel-título " > <lapso  clase = " glyphicon glyphicon-usuario " > clientees </h2 >
		</div >
		<div  clase = " Panel-cuerpo " >
		{{HTML :: enlace (URL :: a ('/ admin / cliente / Crear'), 'Nuevo cliente', array ('class' => 'btn btn-primaria btn-sm pull-derecha'))}}
			<div  clase = " table-sensible " >
				<tabla de  clase = " mesa de ping-hover " >
					<thead >
						<tr >
							<th > Nombre (s) </th >
							<th > Apellido (s) </th >
							<th > sobrenombre </th >
							<th > Playera </th >
							<th > </th >
							<th > </th >
							<th > </th >
						</tr >
					</thead >
					<tbody >
						foreach ($ clientes como $ cliente)
						<tr >
							<td > {{$ cliente-> nombre}} </td >
							<td > {{$ cliente-> Apellido}} </td >
							<td > {{$ cliente-> sobrenombre}} </td >
							<td > {{$ cliente-> playera}} </td >
							<td > {{HTML :: enlace (URL :: a ('/ admin / cliente / Mostrar /'.$ cliente-> id),' Ver ', array (' class '=>' btn btn-éxito btn- xs '))}} </td >
							<td > {{HTML :: enlace (URL :: a ('/ admin / cliente / editar /'.$ cliente-> id),' Editar ', array (' class '=>' btn btn btn- de alerta xs '))}} </td >
							<td > {{HTML :: enlace (URL :: a ('/ admin / cliente / ELIMINAR /'.$ cliente-> id),' ELIMINAR ', array (' class '=>' btn btn-peligro btn- xs '))}} </td >
						</tr >
					endforeach
					</tbody >
				</mesa >
				{{$ clientees-> Enlaces ()}}
			</div >
		</div >
	</div >
</div >
@stop
@section('footer')
	@include('layout.footer')
@stop