<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use App\Partido;
class PartidoController extends Controller
{
    public function getPartidos(){
/*
select('team1,equipoLocal as idlocal, team2.equipoVisitante as idVisitante'
                           ,'team1.nombreEquipo as nameTeam1','team2.nombreEquipo as nameTeam2'
                            ,'partido.golesLocal','partido.golesVisitante','partido.fecha')
                            ->
*/
        $teams = Partido::join('equipo as team1','partido.equipoLocal','=','team1.id')->
                              join('equipo as team2','partido.equipoVisitante','=','team2.id')->
                              select('partido.*','team1.nombreEquipo as equipoLocal','team2.nombreEquipo as equipoVisitante')->paginate(5);

        return view('partidos', [
                                 'values' => [
                                             'equipoLocal'=> 'Equipo Local',
                                             'equipoVisitante'=> 'Equipo Visitante',
                                             'golesLocal'=>'Goles Local',
                                             'golesVisitante'=>'Goles Visitante',
                                             'fecha'=>'Fecha'],
                                 'lista' =>  $teams,
                                 ]
                    );

   }


   public function EliminarPartido($id){
        $partido = Partido::find($id);
        $partido->delete();
        return back();
   }


   public function getModificarPartido(Request $request){
        return view ('formularioPartido');
       /*$partido = Partido::find($request->id);
       $partido->equipoLocal = $request->equipoLocal;
       $partido->equipoVisitante = $request->equipoVisitante;
       $partido->golesLocal = $request->golesLocal;
       $partido->golesVisitante = $request->golesVisitante;
       $partido->fecha = $request->fecha;
       $partido->save();*/
       
   }




}
