<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

            $partidos = Jugar::with('partidos','temporadas','competiciones')
            ->where('temporada_id','=',  $temporadaActual->id)->get();
            
            dd($partidos->toArray());
            //consigo los partidos de la ultima temporada
            //$partidos = $ultimaTemp->with('partidos')->get();
            //consigo los nombre de los equipos de partidos
            return view('prueba', [
                  'partidos' => $partidos
            ]);
      }
}
