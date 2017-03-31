<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipoLocal')->unsigned();
            $table->integer('equipoVisitante')->unsigned();
            $table->integer('golesLocal');
            $table->integer('golesVisitante');
            $table->date('fecha');
            $table->unique(['equipoLocal', 'equipoVisitante']);
            $table->integer('estadio')->nullable();
            $table->foreign('estadio')->references('id')->on('estadio')->onDelete('set null');
            $table->foreign('equipoVisitante')->references('id')->on('equipo')->onDelete('set null');
            $table->foreign('equipoLocal')->references('id')->on('equipo')->onDelete('set null');

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
        Schema::dropIfExists('partido');
    }
}
