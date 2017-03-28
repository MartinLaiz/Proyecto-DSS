<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticiparTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participar', function (Blueprint $table) {
            $table->integer('jugador');
            $table->integer('equipoLocal');
            $table->integer('equipoVisitante');
            $table->integer('tipo')->nullable(); //1 si es titular, dos si esta en el banquillo.
            $table->integer('gol')->nullable();
            $table->integer('asistencia')->nullable();
            $table->primary(['jugador','equipoVisitante','equipoLocal']);
            $table->foreign(array('equipoLocal','equipoVisitante'))
            ->references(array('equipoLocal','equipoVisitante'))->on('partido')->onDelete('set null');
            $table->foreign('jugador')->references('id')->on('jugador')->onDelete('set null');

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
        Schema::dropIfExists('participar');
    }
}
