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
            $partidos = Partido::with('jugarTemporadaActual','equipoLocal','equipoVisitante')->paginate();
            //obtengo las competiciones
            $competiciones = Competicion::with('jugar')->get();
            $variable = array();

            foreach($partidos as $partido){      
                  foreach( $partido->jugarTemporadaActual as $jugar){
                         $variable[] = $jugar;
                  }
                  
            }

            return view('partidos', [
                  'partidos' => $partidos,
                  'competiciones' => $competiciones,
                  'jugar' => $variable,
                  'temporada' => $temporadaActual->nombre]);
      }
}
