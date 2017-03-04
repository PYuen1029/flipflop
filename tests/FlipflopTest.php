<?php

use App\Flipflop;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class FlipflopTest extends TestCase
{
    

    public function testFlipflopCanSelfcreate()
    {
        

        $request = $this->getMockBuilder('Illuminate\Http\Request')
        				->getMock();

		$request['title'] = 'something';
		$request['summary'] = 'something';
		$request['sourceType'] = 'something';
		$request['flip'] = 'something';
		$request['flip_source'] = 'something';
		$request['flop'] = 'something';
		$request['flop_source'] = 'something';

		$thing = Flipflop::selfCreate($request);

        $this->assertInstanceOf('Flipflop', $thing);
    }
}
