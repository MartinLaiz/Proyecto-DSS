<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrigerJugador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('create trigger
                        VerNifEntrenador after
                        insert on Jugador
                        begin
                            select case when (
                            select dni from entrenador
                            where entrenador.dni = new.dni)
                            then raise(abort,"Error al insertar al jugador,
                            existe un dni igual a un entrenador.")
                            end;
                        end');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('drop trigger  VerNifEntrenador');
    }
}
