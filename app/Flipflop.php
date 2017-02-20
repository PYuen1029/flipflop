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

	public function tags()
	{
		return $this->morphToMany('App\Tag', 'taggable');
	}

	public static function selfCreate($request)
	{
		$pol = Politician::findOrFail($request['politician']);

		$flipflop = new Flipflop([
			'title' => $request['title'],
			'summary' => $request['summary'],
			'source_type' => $request['sourceType'],
			'flip' => $request['flip'],
			'flip_source' => ($request['flip_source']) ? $request['flip_source'] : $request['flip'],
			'flop' => $request['flop'],
			'flop_source' => ($request['flop_source']) ? $request['flop_source'] : $request['flop'],
			]);

		// attach politician to the flipflop
		if($flipflop->politicians()->associate($pol)) {
			$flipflop->save();
		}

	}
}
