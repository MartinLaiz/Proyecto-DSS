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
            $table->increments('id');
            $table->char('dni',9)->unique();
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fNac');
            $table->integer('equipo')->unsigned()->nullable();
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
        Schema::dropIfExists('entrenador');
    }
}
