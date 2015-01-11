<form role="form" class="form-horizontal form-groups-bordered" method="post" action="{{ URL::to('/colores/actualizar/'.$color->id)}}">
	<div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="input-group col-sm-5">
					<span class="input-group-addon">
						<i class="entypo-vcard"></i>
					</span>
					<input value="{{$color->nombre}}" type="text" class="form-control" id="nombre" name="nombre" maxlength="20" required pattern="^[a-zA-Z]*$" >
				</div>
			</div>
	<div class="form-group" data-collapsed="0">		
		<button type="submit" class="btn btn-success btn-icon pull-right">Cambiar<i class="fa fa-edit"></i></button>		
	</div>
</form>