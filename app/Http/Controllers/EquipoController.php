<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ParticiparController;

class EquipoController extends Controller
{
      public function getHome(){

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

            })->orderBy('fecha', 'desc')->first();
            /* Consigo los jugadores que participan en el partido
              select j.nombre ,  j.posicion
              from participar p
              join jugador j
              where  p.equipoLocal = 1 and p.equipoVisitante = 2
              and p.jugador = j.id
            */

            $result = DB::table('participar')
                                  ->join('jugador','jugador.id','=','participar.id')
                                  ->where('equipoLocal','=',$partidoFecha->equipoLocal)
                                  ->where('equipoVisitante','=',$partidoFecha->equipoVisitante)
                                  ->where('jugador.id', '=' , $partidoFecha->equipoLocal)->get();


            return view('home', array('ultPartido' => $result));
      }
}
