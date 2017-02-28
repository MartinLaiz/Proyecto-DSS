<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugador', function (Blueprint $table) {
            $table->char('dni',9);
            $table->string('nombre');
            $table->string('apellidos');
            $table->Integer('edad');
            $table->string('posicion');
            $table->integer('cargo');
            $table->string('equipo');
            $table->foreign('equipo')->references('cif')->on('equipo');
            $table->primary('DNI');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugador');
    }
}
