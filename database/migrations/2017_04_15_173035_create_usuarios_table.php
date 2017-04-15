<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
      public function up()
      {
            Schema::create('usuario', function (Blueprint $table) {
                  $table->increments('id');
                  $table->char('dni',9)->unique();
                  $table->string('nombre');
                  $table->string('apellidos');
                  $table->date('fNac');
                  $table->integer('salario');
                  $table->string('posicion')->nullable();
                  $table->integer('rol')->nullable();
                  $table->integer('cargo')->nullable();
                  $table->integer('dorsal')->nullable();
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
            Schema::dropIfExists('usuario');
      }
}
