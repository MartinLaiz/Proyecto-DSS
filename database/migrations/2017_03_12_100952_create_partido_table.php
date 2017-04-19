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

            $table->integer('equipoLocal_id')->unsigned()->nullable();
            $table->foreign('equipoLocal_id')->references('id')->on('equipo')->onDelete('set null');
            $table->integer('equipoVisitante_id')->unsigned()->nullable();
            $table->foreign('equipoVisitante_id')->references('id')->on('equipo')->onDelete('set null');
            $table->unique(['equipoLocal_id', 'equipoVisitante_id']);
            
            $table->integer('estadio_id')->nullable();
            $table->foreign('estadio_id')->references('id')->on('estadio')->onDelete('set null');

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
