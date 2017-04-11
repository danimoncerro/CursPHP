<?php

use Illuminate\Database\Seeder;

class Counties2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties2')->insert([
        	'name'=>'Maramures2',
        ]);

        DB::table('counties2')->insert([
        	'name'=>'Salaj2',
        ]);

        DB::table('counties2')->insert([
        	'name'=>'Cluj2',
        ]);
    }
}
