<?php

class Sservicio extends \Eloquent {
	protected $fillable = [];
	public function marca ()
	{
		return $this->belongsTo('Servicio');
	}
}