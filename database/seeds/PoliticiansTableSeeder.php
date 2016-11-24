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
			'flop_background' => "donald_trump_blue.png"
		]);

		DB::table('politicians')->insert([
			'first_name' => "Hillary Rodham",
			'last_name' => "Clinton",
			'flip_background' => "hillary_clinton_red.png",
			'flop_background' => "hillary_clinton_blue.png"
		]);
		
		DB::table('politicians')->insert([
			'first_name' => "Mitt",
			'last_name' => "Romney",
			'flip_background' => "mitt_romney_red.png",
			'flop_background' => "mitt_romney_blue.png"
		]);

    }
}
