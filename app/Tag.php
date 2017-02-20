<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [];

   	/**
     * Get all of the politicians that are assigned this tag.
     */
    public function politicians()
    {
        return $this->morphedByMany('App\Politician', 'taggable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function flipflops()
    {
        return $this->morphedByMany('App\Flipflop', 'taggable');
    }
}
