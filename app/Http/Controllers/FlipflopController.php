<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flipflop;
use App\Politician;

class FlipflopController extends Controller
{
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
}
