<?php

class Tag extends Eloquent {

	protected $guarded = array('id');

	public function books()
	{
		return $this->belongsToMany('Book');
	}

}