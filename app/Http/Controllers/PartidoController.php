<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use App\Partido;
class PartidoController extends Controller
{
    public function getPartidos(){


       

        return view('partidos', array(
                                 'values' => array(
                                             'equipoLocal'=> 'Equipo Local',
                                             'equipoVisitante'=>'Equipo Visitante',
                                             'golesLocal'=>'Goles Local',
                                             'golesVisitante'=>'Goles Visitante',
                                             'fecha'=>'Fecha'),
                                 'lista' => Partido::paginate(5)
                                 )
                    );
    
   }


  
}
