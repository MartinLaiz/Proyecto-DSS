<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Jugador;
use App\Equipo;

class JugadorController extends Controller
{

      public function perfil($id){
            Jugador::findOrFail($id);
            return view('perfil');
      }

      public function getJugadores(){

            $teams = Jugador::join('equipo','jugador.equipo','=','equipo.id')->get();
            $jugadores = Jugador::all();
            

            return view('jugadores',[ 
                                 'values' => [
                                             'nombre' =>'Nombre',
                                             'apellidos'=>'Apellidos',
                                             'fNac'=>'Fecha de Nacimiento',
                                             'posicion'=>'Posición',
                                             'dorsal'=>'Dorsal',
                                             'nombreEquipo' => 'Equipo'],
                                 'lista' => Jugador::join('equipo','jugador.equipo','=','equipo.id')->orderby('equipo')->paginate(20),
                                 'equipo' => 'Todos'
                                 ]
                    );
   }

      //Devuelve la plantilla del equipo al que pertenece el jugador
      public function getPlantilla($id){
            return Jugador::where('equipo','=',$id)->get()->toArray();
      }

      //Devuelve el formulario de creación del getJugador
      public function formulario(){
            return view('crearJugador', array(
                              'listaEquipos' => Equipo::orderBy('nombre')
                              )
                  );
      }

      public function crearJugador(Request $request){
            $jugador = new Jugador();

            $jugador->dni = $request->dni;
            $jugador->nombre = $request->nombre;
            $jugador->apellidos = $request->apellidos;
            $jugador->fNac = $request->date;
            $jugador->posicion = $request->posicion;
            $jugador->cargo = $request->cargo;
            $jugador->dorsal = $request->dorsal;
            //$jugador->nombreEquipo = $request->equipo;
            //SETENCIA SELECT PARA EL EQUIPO LA UA
   
            $idUa = Equipo::where('nombreEquipo','like','%UA%')->first();
            $jugador->equipo = $idUa->id;

            $jugador->save(); 
            return Redirect::to('jugadores');
                    
      }

      public function buscarJugador(Request $request,$idEquipo,$posicion,$nombre,$apellido){
            $jugador = Jugador::all();

            


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
