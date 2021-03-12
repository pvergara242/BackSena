<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PedidoProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fechaElaboracion', 20);
            $table->string('instructorEncargado', 120);
            $table->string('numeroDocumento', 120);
            $table->string('programa', 120);
            $table->string('ficha', 120);
            $table->string('producto', 120);
            $table->string('valorUnidad', 200);
            $table->string('cantidadProducir', 20);
            $table->string('valorProduccion', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_productos');
    }
}
