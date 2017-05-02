<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function formularioParticipar($equipoLocal,$equipoVisitante){
        $jugadoresLocal = Usuario::where('equipo_id','=',$equipoLocal->id);

        dd($jugadoresLocal->get()->toArray());

        return view ('config/crearParticipar');
    }
}
