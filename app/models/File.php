<?php

class File extends \Eloquent {
	protected $fillable = [];
	public function files() {
		return $this->belongsToMany('Tag');
	}
}