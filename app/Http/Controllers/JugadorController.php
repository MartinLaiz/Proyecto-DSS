<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;
use App\Equipo;

class JugadorController extends Controller
{

      public function perfil($id){
            Jugador::findOrFail($id);
            return view('perfil');
      }

      public function getJugadores(){
            return view('jugadores', array(
                                 'values' => array(
                                             'nombre'=>'Nombre',
                                             'apellidos'=>'Apellidos',
                                             'fNac'=>'Fecha de Nacimiento',
                                             'posicion'=>'Posición',
                                             'dorsal'=>'Dorsal',
                                             'equipo'=>'Equipo'),
                                 'lista' => Jugador::orderBy('equipo')->paginate(20),
                                 'equipo' => 'Todos'
                                 )
                    );
   }

      //Devuelve la plantilla del equipo al que pertenece el jugador
      public function getPlantilla($id){
            return Jugador::where('equipo','=',$id)->get()->toArray();
      }

   public function getJugadoresEquipo($id){
         $team = Equipo::find($id);
         return view('jugadores',  array(
                                 'values' => array(
                                             'nombre'=>'Nombre',
                                             'apellidos'=>'Apellidos',
                                             'fNac'=>'Fecha de Nacimiento',
                                             'posicion'=>'Posición',
                                             'dorsal'=>'Dorsal'),
                                 'lista' => $team->jugadores()->orderBy('apellidos')->simplePaginate(15),
                                 'equipo' => $team->nombre
                           ));
   }

}
