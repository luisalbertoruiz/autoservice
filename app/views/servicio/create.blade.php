<form role="form" class="form-horizontal form-groups-bordered" method="post" action="{{ URL::to('/servicios/guardar')}}">
	<div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="input-group col-sm-6">
					<span class="input-group-addon">
						<i class="entypo-vcard"></i>
					</span>
					<input type="text" class="form-control" id="nombre" name="nombre" maxlength="20" required pattern="^[a-zA-Z]*$" >
				</div>
			</div>
	<div class="form-group" data-collapsed="0">		
		<button type="submit" class="btn btn-success btn-icon pull-right">Agregar<i class="entypo-plus"></i></button>		
	</div>
</form>