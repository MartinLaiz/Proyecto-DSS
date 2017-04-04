<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Validator;
use App\Equipo;
use App\Entrenador;

class EntrenadorController extends Controller
{

   public function getEntrenadores(Request $request){
         $sort = $request->input('sort');
         $type = $request->input('type');
         $correctSort = false;


         $entrenadores = Entrenador::join('equipo','equipo.id', '=','entrenador.equipo')
         ->select('entrenador.*','equipo.nombreEquipo')->orderBy($sort,$type)->simplePaginate(5);

         $values = array(
                        'dni' => 'DNI',
                        'nombre'=>'Nombre',
                        'apellidos'=>'Apellidos',
                        'fNac'=>'Fecha de Nacimiento',
                        'nombreEquipo' => 'Equipo');


         foreach($values as $value) if($sort == strtolower($value)) $correctSort = true;
         //Caso especial: fNac
         if($sort == 'fnac') $sort = 'fNac';
      
         if($correctSort == false && $request->has('sort')){
                  return redirect('entrenadores');
         }


         return view('editarEntrenador', array(
                                    'values' => $values,
                                    'lista' => $entrenadores,
                                    'controller' => array(
                                                'name' =>  'EntrenadorController@getEntrenadores',
                                                'type' => $type,
                                                'sort' => $sort
                                          )
                                 )
                  );
   }

   public function perfil($id){
         return view('entrenador',array('user'=> Entrenador::find($id)));
   }

   //Devuelve el formulario de creación del entrenador
      public function formulario(){
            return view('crearEntrenador', array(
                              'listaEquipos' => Equipo::orderBy('nombreEquipo')->get()
                              )
                  );
      }



      public function formularioModificar($id){

            $entrenador = Entrenador::find($id);
            
            return view('modificarEntrenador', [
                              'listaEquipos' => Equipo::orderBy('nombreEquipo')->get(),
                              'idmodificar' => $id,
                              'listaEntrenador' => $entrenador]
                              
                  );
      }


      
      public function crearEntrenador(Request $request){
            $entrenador = new Entrenador();
            $entrenador->dni = $request->dni;//Importante
            $entrenador->nombre = $request->nombre;
            $entrenador->apellidos = $request->apellidos;
            $entrenador->fNac = $request->date;      
      
            $idLibre = Equipo::where('nombreEquipo','like','%Libre%')->first();
            //miro si existe ya un entrenador con un equipo
            $cantidadEquipo = Entrenador::where('equipo','=', $request->equipo)->count();
            //miro si el equipo es libre
            $entrenadorEquipo = Entrenador::where('equipo','=', $request->equipo)->first();

            //si ya existe un entrandor en el equipo
            if($cantidadEquipo > 0 && $request->equipo != $idLibre->id){
                  $validator = Validator::make($request->all(), [
                        'title' => '2',
                        'body' => '2',
                  ]);
                  $validator->getMessageBag()->add('unique','Error, solo puede haber un entrenador por equipo.');
                  return back()->withErrors($validator)->withInput();
                  
            }else{

                  try{
                        $entrenador->equipo = $request->equipo;
                        $entrenador->save();
                        return Redirect::to('entrenadores');
                  }
                  catch(\Illuminate\Database\QueryException $e){
                        $validator = Validator::make($request->all(), [
                        'title' => '2',
                        'body' => '2',
                  ]);
                        $validator->getMessageBag()->add('unique','Error, el DNI introducido ya existe.');
                        return back()->withErrors($validator)->withInput();
                  }
            }
      }


      public function borrarEntrenador ($id){
            $entrenador = Entrenador::find($id);
            $entrenador->delete();
            return back();
      }


      public function modificarEntrenador (Request $request,$id){
            $entrenador = Entrenador::find($id);
            
            $entrenador->dni = $request->dni;
            $entrenador->nombre = $request->nombre;
            $entrenador->apellidos = $request->apellidos;
            $entrenador->fNac = $request->date;         
            
            $idLibre = Equipo::where('nombreEquipo','like','%Libre%')->first();

            //miro si existe ya un entrenador con un equipo
            $cantidadEquipo = Entrenador::where('equipo','=', $request->equipo)->count();
            //miro si el equipo es libre
            $entrenadorEquipo = Entrenador::where('equipo','=', $request->equipo)->first();

            //si no hay entrenador en el equipo
            //si el equipo es libre puede haber mas de uno
            // y si se cambia al mismo equipo perteneciente 
            if($cantidadEquipo > 0 && $request->equipo != $idLibre->id
            && $request->equipo != $entrenador->equipo){
            
                  $validator = Validator::make($request->all(), [
                        'title' => '2',
                        'body' => '2',
                  ]);
                  $validator->getMessageBag()->add('unique','Error, solo puede haber un entrenador por equipo.');
                  return back()->withErrors($validator)->withInput();
                  
            }else{

                  try{
                        //le pongo el valor aqui para poder hacer la condicion en el if
                        $entrenador->equipo = $request->equipo;
                        $entrenador->save();
                        return Redirect::to('entrenadores');
                  }
                  catch(\Illuminate\Database\QueryException $e){
                        $validator = Validator::make($request->all(), [
                        'title' => '2',
                        'body' => '2',
                  ]);
                        $validator->getMessageBag()->add('unique','Error, el DNI introducido ya existe.');
                        return back()->withErrors($validator)->withInput();
                  }
            }
      }

}
