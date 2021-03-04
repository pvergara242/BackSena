<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntregaProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EntregaProductos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fechaSolicitud', 20);
            $table->string('area', 120);
            $table->string('codigoRegional', 120);
            $table->date('codigoCentroCostos', 120);
            $table->string('nombreCentroCostos', 120);
            $table->string('cordinadorArea', 120);
            $table->string('numeroDocumento', 200);
            $table->string('nombreServidorPublico', 20);
            $table->string('CantcodigoFichaCaracterizacionidades', 20);
            $table->string('codigoSena', 20);
            $table->string('descripcionBien', 180);
            $table->string('unidadMedida', 20);
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
        Schema::dropIfExists('EntregaProducts');
    }
}


