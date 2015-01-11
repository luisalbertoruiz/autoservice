<?php

class Cliente extends \Eloquent {
	protected $fillable = [];
	protected $softDelete = true;
	public function vehiculos()
	{
		return $this->hasMany('Vehiculo');
	}
}