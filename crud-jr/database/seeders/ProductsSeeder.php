<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            DB::table('produtos')->insert([
                'NomeProduto' => Str::random(10),
                'ValorUnitario' => random_int(10, 20000),
                'CodBarras' => Str::random(20)
            ]);
        }
    }
}
