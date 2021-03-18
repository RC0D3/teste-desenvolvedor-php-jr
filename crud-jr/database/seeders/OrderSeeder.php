<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
            DB::table('pedidos')->insert([
                'DtPedido' => now(),
                'NomeProduto' => Str::random(10),
                'Quantidade' => random_int(1, 100),
                'IdCliente' => $i,
                'IdProduto' => $i,
            ]);   
        }
    }
}
