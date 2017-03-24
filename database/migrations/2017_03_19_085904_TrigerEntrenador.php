<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrigerEntrenador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('create trigger
                        VerNifJugador after
                        insert on Entrenador
                        begin
                            select case when (
                            select dni from jugador
                            where jugador.dni = new.dni)

                            then raise(abort,"Error al insertar el entrenador,
                            ya existe un dni igual a un jugador.")
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
         DB::unprepared('drop trigger  VerNifJugador');
    }
}
