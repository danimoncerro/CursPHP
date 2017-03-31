<?php

use Illuminate\Database\Seeder;

class booksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $tableBooks = DB::table('books');
        // $tableBooks->insert([]);

        DB::table('books')->insert([
        	'autorul'=>'Ion Creanga',
        	'titlul'=>'Amintiri din copilarie',
        	'editura'=>'Nemira',
        ]);

        DB::table('books')->insert([
        	'autorul'=>'Mihai Eminescu',
        	'titlul'=>'Poezii',
        	'editura'=>'Laguna',
        ]);

        DB::table('books')->insert([
        	'autorul'=>'Liviu Rebreanu',
        	'titlul'=>'Ion',
        	'editura'=>'Bucurestii Noi',
        ]);
    }
}
