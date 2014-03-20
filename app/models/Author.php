<?php

class Author extends Eloquent {

	protected $guarded = array();

	public function books()
	{
		return $this->hasMany('Book');
	}

}