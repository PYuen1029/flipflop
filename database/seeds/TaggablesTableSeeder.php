<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class TaggablesTableSeeder extends CsvSeeder
{
	public function __construct()
	{
		$this->table = 'taggables';
		$this->filename = base_path().'/database/seeds/csvs/taggables.csv';
	}

	public function run()
	{
		// Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		// DB::table($this->table)->truncate();

		parent::run();
	}
}
