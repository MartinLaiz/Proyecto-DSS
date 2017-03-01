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
            $table->increments('id');
            $table->char('dni',9)->unique();
            $table->string('nombre');
            $table->string('apellidos');
            $table->integer('edad');
            $table->string('posicion');
            $table->integer('cargo');
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
        Schema::dropIfExists('jugador');
    }
}
