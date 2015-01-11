<?php

class Servicio extends \Eloquent {
	protected $fillable = [];
	public function smarcas()
	{
		return $this->hasMany('Sservicio');
	}
}