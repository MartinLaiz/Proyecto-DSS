<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('capacidad');
            $table->integer('equipo')->unsigned()->nullable();
            //¿Estadio pertenece a equipo?
            $table->foreign('equipo')->references('id')->on('equipo')->onDelete('set null');
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
        Schema::dropIfExists('estadio');
    }
}
