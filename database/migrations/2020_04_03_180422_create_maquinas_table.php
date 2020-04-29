<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaquinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinas', function (Blueprint $table) {
            $table->id();
            $table->integer('idPieza');
            $table->string('nombreMaquina');
            $table->string('fechaInicio');
            $table->string('fechaFin');
            $table->integer('cantidadTotal');
            $table->integer('cantidadActual');
            $table->string('colorPrimario');
            $table->string('colorSecundario');
            $table->string('colorTerciario');
            $table->string('fusion');
            $table->string('descripcion');
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
        Schema::dropIfExists('maquinas');
    }
}
