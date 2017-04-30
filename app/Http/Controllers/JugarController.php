<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Partido;
use App\Temporada;
use App\Competicion;
use App\Equipo;
use App\Jugar;
use Carbon\Carbon;
use Validator;


class JugarController extends Controller
{


      public function getJugar(){
            //obtengo la temporada actual
            $temporadaActual = Temporada::with('temporadaActual')->first();

            //obtengo los datos de partido con jugar con la temporada actual
            $partidos = Jugar::with('competicion','partido','temporada')
            ->where('temporada_id','=',$temporadaActual->id)->get();

            return view('partidos', [
                  'partidos' => $partidos]);
      }

      public function editarPartidos(){
            //obtengo la temporada actual
            $temporadaActual = Temporada::with('temporadaActual')->first();

            //obtengo los datos de partido con jugar con la temporada actual
            $partidos = Jugar::with('competicion','partido','temporada')
            ->where('temporada_id','=',$temporadaActual->id)->get();

            return view('config/editarPartidos', [
                  'partidos' => $partidos]);
      }


      public function EliminarJugar($id){
            $partido = Jugar::find($id);
            $partido->delete();
            return back();
      }


      public function formularioInsertar(){

            $equipos = Equipo::where('nombreEquipo','<>','Libre')->get();
            $temporadas = Temporada::with('jugar')->get();
            
            $competiciones = Competicion::with('jugar')->get();
      
            return view ('config/crearPartido',[ 'competiciones' => $competiciones,
            'equipos' => $equipos,'temporadas' => $temporadas]);
      }



      public function crearJugar(Request $request){
            $jugar = new Jugar();
            
            $equipoLocal = $request->equipoLocal;
            $equipoVisitante = $request->equipoVisitante;
            //busco el id de partido con este enfrentamiento

            $partido = Partido::where('equipoLocal_id','=',$equipoLocal)
            ->where('equipoVisitante_id','=',$equipoVisitante)->first();
            dd( $partido)->get();

            $jugar->partido_id = $partido->id;
            $jugar->temporada_id = $request->temporada_id;
            $jugar->competicion_id = $request->competicion_id;
            $jugar->golesLocal = $request->golesLocal;
            $jugar->golesVisitante = $request->golesVisitante;
            $jugar->fecha = $request->fecha;
            
            $jugar->save();

            return back();

      }

}
