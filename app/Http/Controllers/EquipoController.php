<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ParticiparController;

class EquipoController extends Controller
{
      public function getHome(){
            return view('home');
             /*//ultimo partido de la ua
             $equipoUa = DB::table('equipo')->where('nombre','like','%UA%')->first();
             //consigo el ultimo partido de la ua


             $partidoFecha= DB::table('partido')->orWhere(function ($query) {
                                                                  $query->where('equipoVisitante', '=', $equipoUa->id)
                                                                          ->where('equipoLocal', '=', $equipoUa->id);

            })->orderBy('fecha', 'desc')->first();

            $result = DB::table('participar')
                                  ->join('jugador','jugador.id','=','participar.id')
                                  ->where('equipoLocal','=',$partidoFecha->equipoLocal)
                                  ->where('equipoVisitante','=',$partidoFecha->equipoVisitante)
                                  ->where('jugador.id', '=' , $partidoFecha->equipoLocal)->get();


            return view('home', array('ultPartido' => $result));*/
      }
}
