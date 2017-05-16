<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Competicion;
use App\Partido;
use App\Equipo;
use App\Temporada;
use Carbon\Carbon;
use Validator;

class CompeticionController extends Controller
{


    public function crearCompeticion(Request $request){
        $competicion = new Competicion();

        $competicion->nombre = $request->nombre;
        $competicion->save();

        return back();
        
    }

    public function eliminarCompeticion($id){
        $competicion = Competicion::find($id);
        //borramos los partidos que hay en esa competicion
        $partidos = Partido::where('competicion_id','=',$id)->get();
        foreach($partidos as $partido){
            $partido->delete();
        }

        $competicion->delete();
        return back();
        
        
    }

    public function editarCompeticion($id,Request $request){
        $competicion = Competicion::find($id);
        $competicion->nombre = $request->nombre;
        $competicion->save();

        return back();
        
    }

    public function editar(){
        //consigo todos los equipo
        $competiciones = Competicion::all();
        
        return view('config/competicion/editarCompeticion',['competiciones' => $competiciones]);
    }



}