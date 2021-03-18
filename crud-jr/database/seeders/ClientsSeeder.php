<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            DB::table('clientes')->insert([
                'NomeCliente' => Str::random(10),
                'CPF' => $this->randomCpf(),
                'Email' => Str::random(3)."@".Str::random(2).".com"
            ]);
        }
    }

    private function randomCpf(){
        $temp = "";
        for ($i=0; $i < 11; $i++) { 
            $temp .= random_int(0,9);
        }

        return $temp;
    }
}
