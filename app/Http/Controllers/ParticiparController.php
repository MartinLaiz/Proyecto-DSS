<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticiparController extends Controller
{
    public function participar($id){
          Participar::find($id);
          return view('home');
   }


   public function getUltimoPartido(){
       //ultimo partido de la ua
       $equipoUa = DB::table('equipo')->where('nombre','like','%UA%')->first();
       //consigo el ultimo partido de la ua 
       /*
         
        select *
        from partido
        where equipoVisitante = 1 or equipoLocal = 1
        order by fecha desc*/

       $partidoFecha= DB::table('partido')->orWhere(function ($query) {
                                                            $query->where('equipoVisitante', '=', $equipoUa->id)
                                                                    ->where('equipoLocal', '=', $equipoUa->id);
                                                       
      }) ->orderBy('fecha', 'desc')->first();
      /* Consigo los jugadores que participan en el partido
        select j.nombre ,  j.posicion
        from participar p
        join jugador j
        where  p.equipoLocal = 1 and p.equipoVisitante = 2
        and p.jugador = j.id 
      */

      return DB::table('participar')
                            ->join('jugador','jugador.id','=','participar.id')
                            ->where('equipoLocal','=',$partidoFecha->equipoLocal)                         
                            ->where('equipoVisitante','=',$partidoFecha->equipoVisitante)
                            ->where('jugador.id', '=' , $partidoFecha->equipoLocal)->get();

    


              
   }
}
