<?php

use Illuminate\Database\Seeder;

class PoliticiansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('politicians')->insert([
			'first_name' => "Donald",
			'last_name' => "Trump",
			'flip_background' => "donald_trump_red.png",
			'flop_background' => "donald_trump_blue.png",
			'tags' => 'Republican Party, Presidential Candidate, 2016, Outsider'
		]);

		DB::table('politicians')->insert([
			'first_name' => "Hillary Rodham",
			'last_name' => "Clinton",
			'flip_background' => "hillary_clinton_red.png",
			'flop_background' => "hillary_clinton_blue.png",
			'tags'	=> 'Democratic Party, Presidential Candidate, 2016, 2008, Senator, New York'
		]);
		
		DB::table('politicians')->insert([
			'first_name' => "Mitt",
			'last_name' => "Romney",
			'flip_background' => "mitt_romney_red.png",
			'flop_background' => "mitt_romney_blue.png",
			'tags' => 'Republican Party, Presidential Candidate, 2012, 2008, Governor, Massachusetts'
		]);

    }
}
