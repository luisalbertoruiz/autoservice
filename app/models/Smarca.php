<?php

class Smarca extends \Eloquent {
	protected $fillable = [];
	public function marca ()
	{
		return $this->belongsTo('Marca');
	}
}