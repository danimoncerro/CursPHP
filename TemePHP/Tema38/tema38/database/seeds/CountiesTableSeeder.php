<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->insert([
        	'name'=>'Maramures',
        ]);

        DB::table('counties')->insert([
        	'name'=>'Salaj',
        ]);

        DB::table('counties')->insert([
        	'name'=>'Cluj',
        ]);
    }
}
