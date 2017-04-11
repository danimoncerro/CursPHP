<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitiesTableSeeder::class);
        $this->call(CountiesTableSeeder::class);
        $this->call(Cities1TableSeeder::class);
        $this->call(Cities2TableSeeder::class);
        $this->call(Counties1TableSeeder::class);
    }

}
