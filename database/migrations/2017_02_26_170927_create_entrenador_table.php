<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenador', function (Blueprint $table) {
            $table->char('dni',9)->primary();
            $table->string('nombre');
            $table->string('apellidos');
            $table->integer('edad');
            $table->integer('numero');
            $table->string('equipo');
            $table->foreign('equipo')->references('cif')->on('equipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrenador');
    }
}
