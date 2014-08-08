<?php


class Clip extends \Eloquent {
	protected $fillable = [];
	
	protected $table = 'clips';
	
	public function tags() {
		return $this->belongsToMany('Tag');
	}
	public function user() {
		return $this->belongsTo("User");
	}
}