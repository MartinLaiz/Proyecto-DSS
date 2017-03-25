<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function perfil($id){
          Jugador::find($id);
          return view('perfil')
   }

   public function getJugadores(){
         return Jugador::get();
   }
}
