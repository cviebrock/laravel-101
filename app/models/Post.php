<?php

class Post extends Eloquent {

	/**
	 * This isn't mentioned in the slides, but newer versions of Laravel
	 * protect themselves from mass assignment (i.e. the ::create() method).
	 * You need to blacklist which fields you are not able to mass assign.
	 *
	 * @see  http://laravel.com/docs/eloquent#mass-assignment
	 */

	protected $guarded = array('id');


	public function getTitleAttribute($value)
	{
		return ucwords($value);
	}


	public function setTextAttribute($value)
	{
		$value = trim($value);
		$this->attributes['text'] = $value;

		// not limited to modifying the one attribute
		$this->attributes['excerpt'] = substr($value,0,97) . '...';

	}

}