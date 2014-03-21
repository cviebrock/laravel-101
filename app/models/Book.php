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


	public function getTaglistAttribute()
	{
		$tags = $this->tags->lists('name');

		return join(', ', $tags);
	}

}