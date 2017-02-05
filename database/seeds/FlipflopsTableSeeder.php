<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class FlipflopsTableSeeder extends CsvSeeder
{
	public function run()
	{
        DB::connection()->disableQueryLog();

        // Note: these dump files must be generated with DELETE (or TRUNCATE) + INSERT statements
        $sql = file_get_contents(__DIR__ . '/csvs/flipflops-utf8.sql');

        // split the statements, so DB::statement can execute them.
        $statements = array_filter(array_map('trim', explode(';', $sql)));

        foreach ($statements as $stmt) {
            DB::statement($stmt);
        }

        DB::connection()->enableQueryLog();
	}
}
