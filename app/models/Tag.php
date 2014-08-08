<?php

class Tag extends \Eloquent {
	protected $fillable = [];
	public function clips() {
		return $this->belongsToMany('Clip');
	}
}