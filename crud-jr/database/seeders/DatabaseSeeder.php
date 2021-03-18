<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use ClientsSeeder;
use ProductsSeeder;
use OrderSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ClientsSeeder::class,
            ProductsSeeder::class,
            OrderSeeder::class
        ]);
    }
}
