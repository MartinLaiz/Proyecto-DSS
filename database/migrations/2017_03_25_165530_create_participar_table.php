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
            $table->increments('id');
            $table->integer('partido_id');
            $table->integer('usuario_id');
            $table->integer('evento');
            $table->unique(['partido_id','usuario_id']);
            $table->foreign('partido_id')->references('id')->on('partido')->onDelete('set null');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('set null');

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
