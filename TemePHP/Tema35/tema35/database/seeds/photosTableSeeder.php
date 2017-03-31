<?php

use Illuminate\Database\Seeder;

class photosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
        	'coloana2' => 'text2',
        	'coloana3' => 'text3',
        	
        ]);
    }
}
