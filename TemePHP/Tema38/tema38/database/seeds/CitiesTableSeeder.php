<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
        	'name'=>'Baia Mare',
        	'county_id'=>'1',
        ]);

        DB::table('cities')->insert([
        	'name'=>'Sighetu Marmatiei',
        	'county_id'=>'1',
        ]);

        DB::table('cities')->insert([
        	'name'=>'Seini',
        	'county_id'=>'1',
        ]);

        DB::table('cities')->insert([
        	'name'=>'Zalau',
        	'county_id'=>'2',
        ]);

        DB::table('cities')->insert([
        	'name'=>'Jibou',
        	'county_id'=>'2',
        ]);

        DB::table('cities')->insert([
        	'name'=>'Gherla',
        	'county_id'=>'3',
        ]);
    }
}
