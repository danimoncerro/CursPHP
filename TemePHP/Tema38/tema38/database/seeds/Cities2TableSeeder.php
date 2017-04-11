<?php

use Illuminate\Database\Seeder;

class Cities2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('cities2')->insert([
			'name'=>'Baia Mare2',
			'county2_id'=>'1',
		]);  

		DB::table('cities2')->insert([
			'name'=>'Sighetu Marmatiei2',
			'county2_id'=>'1',
		]);  

		DB::table('cities2')->insert([
			'name'=>'Seini2',
			'county2_id'=>'1',
		]);  

		DB::table('cities2')->insert([
			'name'=>'Zalau2',
			'county2_id'=>'2',
		]);

		DB::table('cities2')->insert([
			'name'=>'Jibou2',
			'county2_id'=>'2',
		]);

		DB::table('cities2')->insert([
			'name'=>'Gherla2',
			'county2_id'=>'3',
		]);

    }
}