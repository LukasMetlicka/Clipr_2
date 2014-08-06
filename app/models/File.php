<?php

namespace Models;

class File extends \Eloquent {
	protected $fillable = [];
	public function tags() {
		return $this->belongsToMany('Tag')->withPivot( "file", "tag" );
	}
	public function user() {
		return $this->belongsTo("User", "file_user");
	}
}