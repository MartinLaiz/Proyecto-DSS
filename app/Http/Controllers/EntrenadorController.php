<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrenador;

class EntrenadorController extends Controller
{
    public function perfil($id){
          Entrenador::find($id);
          return view('perfil');//Vista de entrenador
   }

   public function getEntrenadores(){
         return view('entrenadores', array(
                                 'values' => array(
                                             'nombre'=>'Nombre',
                                             'apellidos'=>'Apellidos',
                                             'fNac'=>'Fecha de Nacimiento'),
                                 'lista' => Entrenador::simplePaginate(10)
                                 )
                  );
   }

   public function getEntrenador($id){
         return view('entrenador',array(
                                 'values' => array(
                                             'nombre'=>'Nombre',
                                             'apellidos'=>'Apellidos',
                                             'fNac'=>'Fecha de Nacimiento',
                                             'numero'=>'Número'),
                                 'lista' => Entrenador::all()
                           )
                     );
   }

}
