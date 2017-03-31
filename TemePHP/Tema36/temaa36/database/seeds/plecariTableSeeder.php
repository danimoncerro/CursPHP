<?php

use Illuminate\Database\Seeder;

class plecariTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plecari')->insert([
        	'ora_decolarii'=>'10:30',
        	'destinatia'=>'Bucuresti',
        	'compania'=>'Tarom',
        ]);

        DB::table('plecari')->insert([
        	'ora_decolarii'=>'11:00',
        	'destinatia'=>'Viena',
        	'compania'=>'Austrian Air',
        ]);

        DB::table('plecari')->insert([
        	'ora_decolarii'=>'12:20',
        	'destinatia'=>'Milano',
        	'compania'=>'WizzAir',
        ]);
    }
}
