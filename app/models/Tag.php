<?php

class Tag extends \Eloquent {
	protected $fillable = [];
	public function files() {
		return $this->belongsToMany('File');
	}
}