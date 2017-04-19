<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competicion_id');
            $table->foreign('competicion_id')->references('id')->on('competicion')->onDelete('set null');
            $table->integer('temporada_id');
            $table->foreign('temporada_id')->references('id')->on('temporada')->onDelete('set null');
            $table->integer('partido_id');
            $table->foreign('partido_id')->references('id')->on('partido')->onDelete('set null');
            $table->unique(['competicion_id', 'temporada_id','partido_id']);
            
            $table->integer('golesLocal');
            $table->integer('golesVisitante');
            $table->timestamp('fecha');
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
        Schema::dropIfExists('jugar');
    }
}
