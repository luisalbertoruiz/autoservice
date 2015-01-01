	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>RFC</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
			<tr>
				<td>{{ $cliente->id }}</td>
				<td>{{ $cliente->nombre }}</td>
				<td>{{ $cliente->rfc }}</td>
				<td>{{ HTML::link(URL::to('/admin/cliente/mostrar/'.$cliente->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
				<td>{{ HTML::link(URL::to('/admin/cliente/editar/'.$cliente->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
				<td>{{ HTML::link(URL::to('/admin/cliente/eliminar/'.$cliente->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>