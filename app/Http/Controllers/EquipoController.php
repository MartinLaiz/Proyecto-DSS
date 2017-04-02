<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use App\Partido;

class EquipoController extends Controller
{
      public function getHome(){
            $uaId = Equipo::where('nombreEquipo','like','%UA%')->first()->id;
            $partidosUA = Partido::where('equipoLocal','=', Equipo::where('nombreEquipo','like','%UA%')->first()->id )->
                  join('equipo as equiposLocales','partido.equipoLocal','=','equiposLocales.id')->
                  join('equipo as equiposVisitantes','partido.equipoVisitante','=','equiposVisitantes.id')->
                  join('estadio as estadioJuego','partido.estadio','=','estadioJuego.id')->
                  select('partido.*', 'equiposLocales.nombreEquipo as equipoLocal', 'equiposVisitantes.nombreEquipo as equipoVisitante', 'estadioJuego.nombre as estadio')->
                  orWhere('equipoVisitante','=',$uaId);
            $today = date('Y/m/d',time());

            return view('home',[
                  'ultPartidos' => $partidosUA->whereDate('fecha','>',date('Y/m/d'))->get(),
                  'proxPartidos' => $partidosUA->whereDate('fecha','<',date('Y/m/d'))->get()
            ]);
      }
}
