<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Equipo;
use App\Partido;
use App\Estadio;
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
            return view('crearEquipo');
      }

      public function crearEquipo(Request $request){
            $estadio = new Estadio();
            $estadio->nombre = $request->input('estadioNombre');
            $estadio->capacidad = $request->input('aforo');

            $equipo = new Equipo(); //Si falla el crear equipo el Estadio sigue creado
            $equipo->cif = $request->input('cif');
            $equipo->nombreEquipo = $request->input('equipoNombre');
            $equipo->presupuesto = $request->input('presupuesto');

            return $this->captarErrores($estadio,$equipo,$request);

      }

      public function getEquipo($id){
            $team = Equipo::find($id);
            return view('equipo',[  'equipo' => $team,
            'estadio'=> $team->estadio()->first(),
            'jugadores'=>$team->jugadores()->get()]);
      }

      public function mostrarEquipo(){
            $team = Equipo::join('estadio','equipo.estadio','=','estadio.id')
            ->select('equipo.id as equipoid', 'equipo.*','estadio.*')->paginate(8);
            return view('equipos',['lista' => $team]);
      }



      public function editar(){
            return view('editarEquipos',[
                  'values' => [
                        'cif' =>'CIF',
                        'nombreEquipo'=>'Nombre del equipo',
                        'presupuesto'=>'Presupuesto',
                        'nombre'=>'Estadio',
                        'capacidad' => 'Capacidad'],
                        'lista' => Equipo::where('nombreEquipo','<>','Libre')->join('estadio','estadio.id','=','equipo.estadio')->select('equipo.*','estadio.nombre','estadio.capacidad')->paginate(8)
                  ]
            );

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
                  $equipo->save();
                  $estadio->save();
                  return redirect()->action('EquipoController@editar');
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
