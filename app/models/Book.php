<?php

class Book extends Eloquent {

	protected $guarded = array();

	public function author()
	{
		return $this->belongsTo('Author');
	}

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}

}