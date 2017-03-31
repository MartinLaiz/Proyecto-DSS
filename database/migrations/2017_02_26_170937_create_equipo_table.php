<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cif',9)->unique();
            $table->string('nombreEquipo');
            $table->integer('presupuesto');
            $table->integer('estadio')->unique()->nullable();
            $table->foreign('estadio')->references('id')->on('estadio')->onDelete('set null');
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
        //Previo: Eliminación de jugadores, entrenadores y partidos
        Schema::dropIfExists('equipo');
    }
}
