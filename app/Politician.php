<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politician extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'flip_background', 'flop_background',
    ];
		
	/**
	 * RELATIONSHIPS
	 */
	
	public function flipflops()
	{
		return $this->hasMany('App\Flipflop');
	}

	public function tags()
	{
		return $this->morphToMany('App\Tag', 'taggable');
	}

	/**
	 * METHODS
	 */
	
	public function getFullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	/**
	 * ACCESSORS AND MUTATORS
	 */
	
	// public function getTagsAttribute($value)
	// {
	// 	return explode(', ', $value);
	// }


}
