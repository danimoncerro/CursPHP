<?php

use Illuminate\Database\Seeder;

class countriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([

        	'coloana1' => 'text1',
        	'coloana2' => 'text2',
        	'coloana3' => 'text3',
        	'coloana4' => 'text4',

        ]);
    }
}
