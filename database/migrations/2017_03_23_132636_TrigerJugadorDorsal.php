<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrigerJugadorDorsal extends Migration
{
    
    public function up()
    {

        /* DB::unprepared('create trigger
                        VerDorsalJugador after
                        insert on Jugador
                        begin
                            select case when (
                            	select dorsal from jugador
                            	where (jugador.dorsal = new.dorsal
				                and new.equipo = jugador.equipo))
                
                            then raise(abort,"Error ya existe un dorsal
                            igual en el mismo equipo.")
                            end;
                        end;');*/
    
    }


   
    public function down()
    {
       // DB::unprepared('drop trigger  VerDorsalJugador');
    }
}
