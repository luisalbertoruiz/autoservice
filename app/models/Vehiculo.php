<?php

class Vehiculo extends \Eloquent {
	protected $fillable = [];
	public function cliente ()
	{
		return $this->belongsTo('Cliente');
	}
	public function marca ()
	{
		return $this->belongsTo('Marca');
	}
	public function smarca ()
	{
		return $this->belongsTo('Smarca');
	}
	public function color ()
	{
		return $this->belongsTo('Color');
	}
}