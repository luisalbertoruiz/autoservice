<?php

class Cliente extends \Eloquent {
	protected $fillable = [];
	public function vehiculos()
	{
		return $this->hasMany('Vehiculo');
	}
}