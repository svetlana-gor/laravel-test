<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OsTableSeeder extends Seeder
{
    static $os = [
    	'Android',
    	'iOS',
    	'Linux',
    	'Mac OS',
    	'Windows',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$os as $system) {
            DB::table('os')->insert([
                'name' => $system,
                'is_used' => rand(0,1) == 1
            ]);
        }
    }
}
