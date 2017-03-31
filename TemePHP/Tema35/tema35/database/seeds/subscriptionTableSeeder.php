<?php

use Illuminate\Database\Seeder;

class subscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscription')->insert([
        	'coloana1' => 'text1',
        	'coloana2' => 'text2',
        	'coloana3' => 'text3',	
        ]);
    }
}
