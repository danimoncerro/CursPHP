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
        // $this->call(UsersTableSeeder::class);
        $this->call(photosTableSeeder::class);
        $this->call(newsletterTableSeeder::class);
        $this->call(subscriptionTableSeeder::class);
        $this->call(citiesTableSeeder::class);
        $this->call(countriesTableSeeder::class);
        $this->call(moviesTableSeeder::class);
        $this->call(hobbiesTableSeeder::class);
        $this->call(laptopsTableSeeder::class);
        $this->call(booksTableSeeder::class);
        $this->call(hotelsTableSeeder::class);
    }
}
