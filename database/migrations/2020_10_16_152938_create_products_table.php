<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('CodigoProducto');
            $table->string('nombreProducto');
            $table->string('CantidadProducto');
            $table->string('consumo');
            $table->string('MercanciaVenta');
            $table->string('produccionInterna');
            $table->string('ManejaLotes');
            $table->string('esServicio');
            $table->string('productoActivo');
            $table->string('DatosFabricante');
            $table->string('Medidas');
            $table->string('UbicacionFisica');
            $table->string('Referencia');
            $table->string('Presentacion');
            $table->string('ProductoEquivalente');
            $table->string('StockMinimo');
            $table->string('StockMaximo');
            $table->string('TiempoReposicion');
            $table->string('CuentaInventarios');
            $table->string('CuentaContableIngresoAjuste');
            $table->string('DevolucionVentas');
            $table->string('DevolucionCompras');
            $table->string('CuentaContableGasto');
            $table->string('CuentaContableGastoAjuste');
            $table->string('ImpuestoCompras');
            $table->string('ImpuestoVentas');      
            
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
        Schema::dropIfExists('products');
    }
}
