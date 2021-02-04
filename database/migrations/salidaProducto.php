<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaEntregaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregaProductos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fechaSolicitud', 20);
            $table->string('area', 120);
            $table->string('codigoRegional', 120);
            $table->date('nombreRegional', 120);
            $table->string('codigoCentroCostos', 120);
            $table->string('nombreCentroCostos', 120);
            $table->string('cordinadorArea', 200);
            $table->string('numeroDocumento', 20);
            $table->string('nombreServidorPublico', 20);
            $table->string('numeroDocumentoServidor', 20);
            $table->string('codigoFichaCaracterizacion', 180);
            $table->string('codigoSena', 20);
            $table->string('descripcionBien', 120);
            $table->string('unidadMedida', 120);
            $table->string('cantidadSolicitada', 120);
            $table->string('cantidadEntregada', 120);
            $table->string('observaciones', 120);
            $table->string('nombre', 120);
            $table->string('cargo', 120);
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
        Schema::dropIfExists('entregaProductos');
    }
}

