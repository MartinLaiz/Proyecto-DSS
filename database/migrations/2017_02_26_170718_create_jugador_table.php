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
            $table->char('DNI',9);
            $table->string('nombre');
            $table->string('apellidos');
            $table->Integer('edad');
            $table->string('posicion');
            $table->Integer('cargo');
            $table->Integer('equipo')->unsigned();
            $table->foreign('equipo')->references('id')->on('equipo');
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
