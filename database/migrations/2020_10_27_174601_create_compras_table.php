<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CodigoComprobante', 20);
            $table->string('numeroFactura', 120);
            $table->string('DetalleGeneral', 120);
            $table->date('FechaCompra', 120);
            $table->string('CodigoTercero', 120);
            $table->string('nombreTercero', 120);
            $table->string('codigoProducto', 200);
            $table->string('nombreProducto', 20);
            $table->string('Cantidades', 20);
            $table->string('unidadesDisponibles', 20);
            $table->string('ReferenCostoUnitarioCompra', 180);
            $table->string('CostoTotalCompra', 20);
            $table->string('Referencia', 120);
            $table->string('Presentacion', 120);
            $table->string('Impuestos', 120);
            $table->string('Porcentajeimpuesto', 120);
            $table->string('TotalImpuestos', 120);
            $table->string('RetencionFuente', 120);
            $table->string('TiempoReposicion', 120);
            $table->string('PorcentajeRetefte', 120);
            $table->string('TotalRetenciónFuente', 120);
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
        Schema::dropIfExists('compra');
    }
}
