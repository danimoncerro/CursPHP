<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
        	'name'=>'architecture',
        	'year_of_study' => '1',	
        ]);

        DB::table('classes')->insert([
        	'name'=>'sociology',
        	'year_of_study' => '3',
        ]);
    }
}
