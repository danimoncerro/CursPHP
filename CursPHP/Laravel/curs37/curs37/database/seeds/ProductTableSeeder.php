<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'title' =>'Tricouri',
            'price' => 40,
            'stock' => 20,
            'category_id' => 1,
        ]);

        DB::table('product')->insert([
            'title' =>'Pantaloni',
            'price' => 100,
            'stock' => 10,
            'category_id' => 2,
        ]);
        DB::table('product')->insert([
            'title' =>'Tricouri',
            'price' => 40,
            'stock' => 20,
            'category_id' => 1,
        ]);

        DB::table('product')->insert([
            'title' =>'Pantaloni',
            'price' => 100,
            'stock' => 10,
            'category_id' => 2,
        ]);
        DB::table('product')->insert([
            'title' =>'Tricouri',
            'price' => 40,
            'stock' => 20,
            'category_id' => 2,
        ]);

        DB::table('product')->insert([
            'title' =>'Pantaloni',
            'price' => 100,
            'stock' => 10,
            'category_id' => 2,
        ]);

    }
}
