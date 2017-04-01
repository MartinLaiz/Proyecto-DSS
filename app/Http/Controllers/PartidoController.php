<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use App\Partido;
class PartidoController extends Controller
{
    public function getPartidos(){
        

        
        /*Select  team1.nombreEquipo as 'equipo 1',team2.nombreEquipo as 'equipo 2'
        From partido 
        inner join equipo team1  on partido.equipoVisitante = team1.id
        inner join equipo team2  on partido.equipoLocal = team2.id;*/


        return view('partidos', [
                                 'values' => [
                                             'nameTeam1'=> 'Equipo Local',
                                             'nameTeam2'=> 'Equipo Visitante',
                                             'golesLocal'=>'Goles Local',
                                             'golesVisitante'=>'Goles Visitante',
                                             'fecha'=>'Fecha'],
                                 'lista' => Partido::select('team1.nombreEquipo as nameTeam1','team2.nombreEquipo as nameTeam2'
                                    ,'partido.golesLocal','partido.golesVisitante','partido.fecha')
                                    ->join('equipo as team1','partido.equipoLocal','=','team1.id')
                                    ->join('equipo as team2','partido.equipoVisitante','=','team2.id')->paginate(5),
                                 ]
                    );
    
   }


  
}
