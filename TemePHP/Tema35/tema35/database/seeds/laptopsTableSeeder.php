<?php

use Illuminate\Database\Seeder;

class laptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laptops')->insert([
        	'coloana1'=>'text1',
        	'coloana2'=>'text2',
        	'coloana3'=>'text3',
        	'coloana4'=>'text4',
        ]);

         DB::table('laptops')->insert([
        	'coloana1'=>'exemplu1',
        	'coloana2'=>'exemplu2',
        	'coloana3'=>'exemplu3',
        	'coloana4'=>'exemplu4',
         ]);
    }
}