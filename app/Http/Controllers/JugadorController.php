<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;

class JugadorController extends Controller
{
    public function perfil($id){
          Jugador::find($id);
          return view('perfil');
   }

   public function getJugadores(){
         return view('jugadores', array(
                                 'values' => array(
                                             'nombre'=>'Nombre',
                                             'apellidos'=>'Apellidos',
                                             'fNac'=>'Fecha de Nacimiento',
                                             'posicion'=>'Posición',
                                             'dorsal'=>'Dorsal'),
                                 'lista' => Jugador::simplePaginate(20)
                                 )
                    );
   }

   public function getPlantilla($id){
         return Jugador::where('equipo','=',$id)->get()->toArray();
   }

}
