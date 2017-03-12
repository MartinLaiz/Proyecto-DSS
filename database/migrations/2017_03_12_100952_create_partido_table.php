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
            $table->integer('equipoLocal')->unsigned()->nullable();
            $table->foreign('equipoLocal')->references('id')->on('equipo')->onDelete('set null');
            $table->integer('equipoVisitante')->unsigned()->nullable();
            $table->foreign('equipoVisitante')->references('id')->on('equipo')->onDelete('set null');
            $table->string('resultado');
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
        Schema::dropIfExists('partido');
    }
}
