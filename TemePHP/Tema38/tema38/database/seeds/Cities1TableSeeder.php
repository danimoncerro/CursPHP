<?php

use Illuminate\Database\Seeder;

class Cities1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities1')->insert([
        	'name'=>'Baia Mare1',
        	'county1_id'=>'1',
        ]);

        DB::table('cities1')->insert([
        	'name'=>'Sighetu Marmatiei1',
        	'county1_id'=>'1',
        ]);

        DB::table('cities1')->insert([
        	'name'=>'Seini1',
        	'county1_id'=>'1',
        ]);

        DB::table('cities1')->insert([
        	'name'=>'Zalau1',
        	'county1_id'=>'2',
        ]);

        DB::table('cities1')->insert([
        	'name'=>'Jibou1',
        	'county1_id'=>'2',
        ]);

        DB::table('cities1')->insert([
        	'name'=>'Gherla1',
        	'county1_id'=>'3',
        ]);
        
    }
}
