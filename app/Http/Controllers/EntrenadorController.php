<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrenador;

class EntrenadorController extends Controller
{

   public function getEntrenadores(){
         return view('entrenadores', array(
                                 'values' => array(
                                             'nombre'=>'Nombre',
                                             'apellidos'=>'Apellidos',
                                             'fNac'=>'Fecha de Nacimiento'),
                                 'lista' => Entrenador::simplePaginate(20)
                                 )
                  );
   }

   public function perfil($id){
         return view('entrenador',array('user'=> Entrenador::find($id)));
   }

}
