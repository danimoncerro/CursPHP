<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('students')->insert([
            'name' =>'Marchis Mihai',
            'age' => 20,
            'gender' => 'male',
            'classes_id' => '1',
        ]);

        DB::table('students')->insert([
            'name' =>'Ghiman Otilia',
            'age' => 19,
            'gender' => 'female',
            'classes_id' => '2',
        ]);
    }
}
