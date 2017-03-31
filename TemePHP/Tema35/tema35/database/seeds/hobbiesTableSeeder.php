<?php

use Illuminate\Database\Seeder;

class hobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->insert([

        	'coloana1'=>'text1',
        	'coloana2'=>'text2',
        	'coloana3'=>'text3',

        ]);

        DB::table('hobbies')->insert([

        	'coloana1'=>'exemplu1',
        	'coloana2'=>'exemplu2',
        	'coloana3'=>'exmeplu3',

        ]);
    }
}
