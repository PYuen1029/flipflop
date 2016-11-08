<?php

use Illuminate\Database\Seeder;

class FlipflopsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('flipflops')->insert([
			'title' => "Tax Returns and Obama Birth Certificate",
			'summary' => "Donald Trump said that he would release his tax returns when President Obama released his birth certificate. After the president did, Donald Trump still has not released his tax returns.",
			'flip' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati dolorem inventore accusamus laboriosam ab.",
			'flop' => "beatae blanditiis fugiat quam molestiae harum quisquam eius eum id repudiandae natus. Soluta sequi, delectus illum.",
			'source_type' => "text",
			'flip_source' => "10/1/2011",
			'flop_source' => "10/1/2014",
			'politician_id' => 1
		]);

		DB::table('flipflops')->insert([
			'title' => "Supporting TPP",
			'summary' => "Hillary Clinton claims to be opposed to the TPP during the 2016 election cycle but originally supported it.",
			'flip' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati dolorem inventore accusamus laboriosam ab.",
			'flop' => "beatae blanditiis fugiat quam molestiae harum quisquam eius eum id repudiandae natus. Soluta sequi, delectus illum.",
			'source_type' => "audio",
			'flip_source' => "05/24/2012",
			'flop_source' => "05/24/2015",
			'politician_id' => 2
		]);

		DB::table('flipflops')->insert([
			'title' => "Stem Cell Research",
			'summary' => "Mitt Romney originally supported stem cell research, but later opposed it when running for president.",
			'flip' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati dolorem inventore accusamus laboriosam ab.",
			'flop' => "beatae blanditiis fugiat quam molestiae harum quisquam eius eum id repudiandae natus. Soluta sequi, delectus illum.",
			'source_type' => "text",
			'flip_source' => "04/24/2008",
			'flop_source' => "04/24/2012",
			'politician_id' => 3
		]);
	}
}
