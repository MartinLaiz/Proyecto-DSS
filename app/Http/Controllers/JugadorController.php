<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;
use Validator;
use App\Jugador;
use App\Equipo;

class JugadorController extends Controller
{

      public function perfil($id){
            Jugador::findOrFail($id);
            return view('perfil');
      }

      public function getJugador($id){
            return view('jugador',['jugador' => Jugador::find($id)]);
      }

      public function getJugadores(){
            return view('jugadores',[
                        'jugadores' => Jugador::join('equipo','jugador.equipo','=','equipo.id')->select('jugador.*','equipo.nombreEquipo')->orderby('equipo')->orderBy('dorsal')->paginate(20),
                        'equipo' => 'Todos',
                        'equipos' => Equipo::get(),
                        'entrenadorNombre' => 'Ninguno',
                        'entrenadorApellidos' => 'Ninguno'
            ]);
      }

      public function getJugadoresEquipo($id){
            $team = Equipo::find($id);
            return view('jugadores',  array(
                                    'jugadores' => $team->jugadores()->orderBy('apellidos')->simplePaginate(15),
                                    'equipo' => $team->nombreEquipo,
                                    'equipos' => Equipo::get(),
                                    'entrenadorNombre' => 'Ninguno',
                                    'entrenadorApellidos' => 'Ninguno'
                                    )
            );
      }

      //Devuelve la plantilla del equipo al que pertenece el jugador
      public function getPlantilla($id){
            return Jugador::where('equipo','=',$id)->get()->toArray();
      }

      //Devuelve el formulario de creación del getJugador
      public function formulario(){
            return view('crearJugador', array(
                  'listaEquipos' => Equipo::orderBy('nombreEquipo')->get()
                  )
            );
      }

      public function crearJugador(Request $request){
            //Control de errores
            $errors = false;
            $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            ]);
            //Rellenar jugador
            $jugador = new Jugador();
            $jugador->dni = $request->dni;
            $jugador->nombre = $request->nombre;
            $jugador->apellidos = $request->apellidos;
            $jugador->fNac = $request->date;
            $jugador->posicion = $request->posicion;
            $jugador->cargo = $request->cargo;
            $jugador->dorsal = $request->dorsal;
            $jugador->equipo = $request->equipo;
            
            //Gestión del dorsal
            $jugadores = Jugador::where('equipo','like',$jugador->equipo);
            foreach($jugadores as $jug){
                  if($jugador->dorsal == $jug->dorsal){
                        $errorDorsal = 'El jugador '.$jug->nombre.' ya tiene esa dorsal';
                        $validator->getMessageBag()->add('dorsal', $errorDorsal);
                        $errors = true;
                  }
            }
            //Intentamos insertar el jugador
            try{
                  $jugador->save();
            } catch(QueryException $e){
                  $validator->getMessageBag()->add('dni','Ese DNI ya existe');
                  $errors = true;
            }
            if($errors) return Redirect::back()->withErrors($validator)->withInput();

            return Redirect::to('jugadores');
      }

      public function editar(){
            return view('editarJugadores',[
                  'values' => [
                        'nombre' =>'Nombre',
                        'apellidos'=>'Apellidos',
                        'fNac'=>'Fecha de Nacimiento',
                        'posicion'=>'Posición',
                        'dorsal'=>'Dorsal',
                        'nombreEquipo' => 'Equipo'],
                        'lista' => Jugador::join('equipo','jugador.equipo','=','equipo.id')->select('jugador.*','equipo.nombreEquipo')->orderby('equipo')->orderBy('dorsal')->paginate(20),
                        'equipo' => 'Todos',
                        'equipos' => Equipo::get(),
                        'entrenadorNombre' => 'Ninguno',
                        'entrenadorApellidos' => 'Ninguno'
                  ]
            );
      }

      public function editarJugadoresEquipo($id){
            $team = Equipo::find($id);
            return view('editarJugadores', array(
            'values' => array(
                  'nombre'=>'Nombre',
                  'apellidos'=>'Apellidos',
                  'fNac'=>'Fecha de Nacimiento',
                  'posicion'=>'Posición',
                  'dorsal'=>'Dorsal'),
                  'lista' => $team->jugadores()->orderBy('apellidos')->simplePaginate(15),
                  'equipo' => $team->nombreEquipo,
                  'equipos' => Equipo::get(),
                  'entrenadorNombre' => 'Ninguno',
                  'entrenadorApellidos' => 'Ninguno'
                  )
            );
      }

      public function editarJugador($id){
            return view('modificarJugador', ['jugador' => Jugador::find($id),'equipos' => Equipo::get()]);
      }

      public function eliminar($id){
            $jugador = Jugador::find($id);
            $jugador->delete();
            return back();
      }

      public function editarJugadorPost(Request $request, $id){
            $jugador = Jugador::find($id);
            $jugador->dni = $request->dni;
            $jugador->nombre = $request->nombre;
            $jugador->apellidos = $request->apellidos;
            $jugador->fNac = $request->fNac;
            $jugador->posicion = $request->posicion;
            $jugador->cargo = $request->cargo;
            $jugador->dorsal = $request->dorsal;
            $jugador->equipo = $request->equipo;
            $jugador->save();
            return redirect()->action('JugadorController@editar');
      }
}
