<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flipflop extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'summary', 'flip', 'flop', 'source_type', 'flip_source', 'flop_source', 'politician_id',
    ];
		
	/**
	 * RELATIONSHIPS
	 */
	
	public function politicians()
	{
		return $this->belongsTo('App\Politician', 'politician_id');
	}
}
