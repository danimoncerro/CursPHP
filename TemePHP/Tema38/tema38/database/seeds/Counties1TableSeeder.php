<?php

use Illuminate\Database\Seeder;

class Counties1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties1')->insert([
        	'name'=>'Maramures1',
        ]);

        DB::table('counties1')->insert([
        	'name'=>'Salaj1',
        ]);

        DB::table('counties1')->insert([
        	'name'=>'Cluj1',
        ]);
    }
}
