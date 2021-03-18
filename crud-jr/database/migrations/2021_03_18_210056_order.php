<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table){
            $table->id('NumeroPedido');
            $table->dateTime('DtPedido');
            $table->integer('Quantidade');
            $table->foreignId('IdCliente')->constrained('clientes');
            $table->foreignId('IdProduto')->constrained('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}

