<?php

class Marca extends \Eloquent {
	protected $fillable = [];
	public function smarcas()
	{
		return $this->hasMany('Smarca');
	}
}