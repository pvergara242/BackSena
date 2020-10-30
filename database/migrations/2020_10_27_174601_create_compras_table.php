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
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document', 20);
            $table->string('name', 120);
            $table->string('last_name', 120);
            $table->string('surname', 120);
            $table->string('last_surname', 120);
            $table->enum('type', [1, 2])->default('1')->nullable();
            $table->string('razon_social', 200);
            $table->string('pais_code', 20);
            $table->string('departamento_code', 20);
            $table->string('municipio_code', 20);
            $table->string('address', 180);
            $table->string('phone', 20);
            $table->string('email', 120);
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
        Schema::dropIfExists('compras');
    }
}
