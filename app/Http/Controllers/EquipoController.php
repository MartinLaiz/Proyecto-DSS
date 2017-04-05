<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use App\Partido;
use App\Estadio;
use Carbon\Carbon;

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
            $estadio->save();

            $equipo = new Equipo();
            $equipo->cif = $request->input('cif');
            $equipo->nombreEquipo = $request->input('equipoNombre');
            $equipo->presupuesto = $request->input('presupuesto');

            $estadio->equipo()->save($equipo);
            dd($equipo);
            return redirect()->action('EquipoController@configuracion', $equipo->id);
      }

      public function getEquipo($id){
            $team = Equipo::find($id);
            return view('equipo',[  'equipo' => $team,
            'estadio'=> $team->estadio()->first(),
            'jugadores'=>$team->jugadores()->get()]);
      }


      public function editar(){
            return view('editarEquipos',[
                  'values' => [
                        'cif' =>'CIF',
                        'nombreEquipo'=>'Nombre del equipo',
                        'presupuesto'=>'Presupuesto',
                        'nombre'=>'Estadio',
                        'capacidad' => 'Capacidad'],
                        'lista' => Equipo::where('nombreEquipo','<>','Libre')->join('estadio','estadio.id','=','equipo.estadio')->paginate(5)
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
            $equipo->save();

            $estadio = Estadio::find($equipo->estadio);
            $estadio->nombre = $request->nombre;
            $estadio->capacidad = $request->capacidad;
            $estadio->save();

            try{
                  $partido->save();
                  return redirect()->action('EquipoController@editar');
            }
            catch(\Illuminate\Database\QueryException $e){
                  $validator = Validator::make(
                        $request->all(), [
                              'title' => '2',
                              'body' => '2',
                        ]
                  );
                  $validator->getMessageBag()->add('unique','Error, el CIF introducido ya existe');
                  return back()->withErrors($validator)->withInput();
            }
      }

      public function eliminar($id){
            $equipo = Equipo::find($id);
            $estadio = Estadio::find($equipo->estadio);
            $equipo->delete();
            return back();
      }
}
