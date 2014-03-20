<?php

class Author extends Eloquent {

	protected $guarded = array();

	public function books()
	{
		return $this->hasMany('Book');
	}

	public function getNameAttribute()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

}