<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('teachers')->insert([
        	'name' => 'Confidor Emanuela',
        	'subject' => 'History',
        ]);
    }
}
