<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flipflop;
use App\Politician;

class FlipflopController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$flipflops = Flipflop::get()
		->map(function($val) {
		   $pol = $val->politicians;
		   $newArr = $val->toArray();
		   $newArr['flipBackground'] = $pol->flip_background; 
		   $newArr['flopBackground'] = $pol->flop_background;
		   $newArr['name'] = $pol->getFullName();

		   return $newArr;
	   });

		return $flipflops->toJson();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'title'						=> 'required | string |max:255',
			'politician'				=> 'required | integer',
			'summary'					=> 'required | string ',
			'sourceType'				=> 'required | string ',
			'flip'						=> 'required | string ',
			'flip_source'				=> 'string',
			'flop'						=> 'required | string ',
			'flop_source'				=> 'string'
		]);

		$flipflop = FlipFlop::selfCreate($request);

		return ;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
