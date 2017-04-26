<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Equipo;
use App\Partido;
use App\Estadio;
use App\Patrocinador;
use Carbon\Carbon;
use Validator;

class EquipoController extends Controller
{
      public function getHome(){
            $idUA = Equipo::where('nombreEquipo','like','%UA%')->first()->id;
            $ultPartidos = Partido::where('fecha','<',Carbon::now())->orderBy('fecha','desc')->take(5)->get();
            $proxPartidos = Partido::where('fecha','>',Carbon::now())->orderBy('fecha','asc')->take(5)->get();

            return view('home',[
                  'equipos' => Equipo::get(),
                  'estadios' => Estadio::get(),
                  'ultPartidos' => $ultPartidos,
                  'proxPartidos' => $proxPartidos
            ]);
      }

      public function configuracion(){
            return view('configuracion');
      }

      public function formulario(){
            return view('config/crearEquipo');
      }

      public function crearEquipo(Request $request){
            
            $estadio = new Estadio();
            $estadio->nombre = $request->input('estadioNombre');
            $estadio->capacidad = $request->input('aforo');

            $equipo = new Equipo(); //Si falla el crear equipo el Estadio sigue creado
            $equipo->cif = $request->input('cif');
            $equipo->nombreEquipo = $request->input('equipoNombre');
            $equipo->presupuesto = $request->input('presupuesto');
            $equipo->logo = '';
            //Por defecto se crea sin ningun patrocinador.
            $patrocinador = Patrocinador::where('nombre','=','libre')->first();
            $equipo->patrocinador_id = $patrocinador->id;
            //consigo el nuevo estadio

            return $this->captarErrores($estadio,$equipo,$request);
      }


      public function getEquipo($id){
            $team = Equipo::find($id);
            return view('equipo',[  'equipo' => $team,
            'estadio'=> $team->estadio()->first(),
            'jugadores'=>$team->jugadores()->get()]);
      }

      public function getEquipos(){
            //consigo todos los equipos con los estadios
            $team = Equipo::with('estadio','patrocinador')->get();

            return view('equipos',['lista' => $team]);
      }

      public function editar(){
            $team = Equipo::with('estadio','patrocinador')->get();
            return view('config/editarEquipos',['lista' => $team]);
      }

      public function modificarEquipo($id){
            $equipo = Equipo::find($id);
            return view(
                  'modificarEquipo',[
                        'equipo' => $equipo,
                        'estadio' => $equipo->estadio()->first()
                  ]
            );
      }

      public function modificarEquipoPost(Request $request, $id){
            $equipo = Equipo::find($id);
            $equipo->cif = $request->cif;
            $equipo->nombreEquipo = $request->nombreEquipo;
            $equipo->presupuesto = $request->presupuesto;

            $estadio = Estadio::find($equipo->estadio);
            $estadio->nombre = $request->nombre;
            $estadio->capacidad = $request->capacidad;


            return $this->captarErrores($estadio,$equipo,$request);

      }

      public function captarErrores($estadio,$equipo,$request){
            try{
                  //le pongo el valor aqui para poder hacer la condicion en el if
                  $estadio->save();
                  $equipo->estadio_id = Estadio::where('nombre','=', $estadio->nombre)->first()->id;
                  $equipo->save();
                  return Redirect::to('/equipo');
            }
            catch(\Illuminate\Database\QueryException $e){
                  $validator = Validator::make($request->all(), [
                        'title' => '2',
                        'body' => '2',
                  ]);
                  $validator->getMessageBag()->add('unique','Error, el CIF introducido ya existe.');
                  return back()->withErrors($validator)->withInput();
            }
      }

      public function eliminar($id){
            $equipo = Equipo::find($id);
            $estadio = $equipo->estadio()->first();
            $estadio->delete();
            $equipo->delete();
            return back();
      }
}
