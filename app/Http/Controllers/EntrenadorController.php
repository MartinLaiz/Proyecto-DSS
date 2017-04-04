<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Equipo;
use App\Entrenador;

class EntrenadorController extends Controller
{

   public function getEntrenadores(Request $request){
         $sort = $request->input('sort');
         $type = $request->input('type');
         $correctSort = false;

         $values = array(
                        'nombre'=>'Nombre',
                        'apellidos'=>'Apellidos',
                        'fNac'=>'fNac');

         foreach($values as $value) if($sort == strtolower($value)) $correctSort = true;
         //Caso especial: fNac
         if($sort == 'fnac') $sort = 'fNac';
      
         if($correctSort == false && $request->has('sort')){
                  return redirect('entrenadores');
         }


         return view('editarEntrenador', array(
                                    'values' => $values,
                                    'lista' => Entrenador::orderBy($sort,$type)->simplePaginate(20),
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

      public function crearEntrenador(Request $request){
            $entrenador = new Entrenador();

            $entrenador->dni = $request->dni;//Importante
            $entrenador->nombre = $request->nombre;
            $entrenador->apellidos = $request->apellidos;
            $entrenador->fNac = $request->date;
            //$entrenador->nombreEquipo = $request->equipo;
            //SETENCIA SELECT PARA EL EQUIPO LA UA

            $idUa = Equipo::where('nombreEquipo','like','%UA%')->first();
            $entrenador->equipo = $idUa->id;

            $entrenador->save();
            return Redirect::to('entrenadores');

      }


      public function borrarEntrenador ($id){
            $entrenador = Entrenador::find($id);
            $entrenador->delete();
            return back();
      }

}
