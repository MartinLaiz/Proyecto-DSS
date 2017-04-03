<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use App\Partido;
use App\Estadio;

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
                  'ultPartidos' => $partidosUA->whereDate('fecha','>',date('Y/m/d'))->take(5)->get(),
                  'proxPartidos' => $partidosUA->whereDate('fecha','<',date('Y/m/d'))->take(5)->get()
            ]);
      }

      public function configuracion(){
            return view('configuracion');
      }

      public function formulario(){
            return view('crearEquipo');
      }

      public function crearEquipo(Request $request){
            $estadio = new Estadio();
            $estadio->nombre = $request->input('estadioNombre');
            $estadio->capacidad = $request->input('aforo');
            $estadio->save();

            $equipo = new Equipo();
            $equipo->cif = $request->input('cif');
            $equipo->nombreEquipo = $request->input('equipoNombre');
            $equipo->presupuesto = $request->input('presupuesto');

            $estadio->equipo()->save($equipo);

            return redirect()->action('EquipoController@getEquipo', $equipo->id);
      }

      public function getEquipo($id){
            return view('prueba',['prueba' => $id]);
      }

}
