<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        for ($i=1; $i <= 3; $i++) { 
            DB::table('pedidos')->insert([
                'DtPedido' => now(),
                'Quantidade' => random_int(1, 100),
                'IdCliente' => $i,
                'IdProduto' => random_int(1, 5),
            ]);   
        }
    }
}
