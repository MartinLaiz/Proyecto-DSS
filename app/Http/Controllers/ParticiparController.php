<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Participar;
use App\Partido;

class ParticiparController extends Controller
{
    public function crearParticipar($request){
        $participar = new Participar();

        $participar->usuario_id = $request->usuario_id;
        $participar->jugar_id = $request->jugar_id;
        $participar->evento_id = $request->evento_id;
        $participar->save();
    }


    /*public function formularioParticipar($golLocal,$golVisitante,$equipoLocal,$equipoVisitante){

        return view ('config/crearParticipar');
    }*/

    public function verParticipar($idPartido){
        $partido = Partido::with('equipoLocal','equipoVisitante')
        ->where('id','=',$idPartido)->first();


        $participar = Participar::where('partido_id','=',$idPartido)->first();

        if($participar != null){
             return view ('config/partido/perfilPartido',[ 'partido' => $partido
             ,'cantidad' => 0]);
        }else{
            return view ('config/partido/perfilPartido',[ 'partido' => $partido
            ,'cantidad' => 0]);
        }

       
       
    }
}
