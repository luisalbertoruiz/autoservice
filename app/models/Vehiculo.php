<?php

class Vehiculo extends \Eloquent {
	protected $fillable = [];
	public function cliente ()
	{
		return $this->belongsTo('Cliente');
	}
}