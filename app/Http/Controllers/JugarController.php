<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partido;
use App\Temporada;
use App\Competicion;
use App\Equipo;
use Carbon\Carbon;
use Validator;

class JugarController extends Controller
{


      public function getJugar(){
            //obtengo la ultima temporada
            $ultimaTemp = Temporada::orderBy('nombre','desc')->first();
            $partidos = Partido::with('jugar')->get();
            //consigo los partidos de la ultima temporada
            //$partidos = $ultimaTemp->with('partidos')->get();
            //consigo los nombre de los equipos de partidos
            return view('prueba', [
                  'partidos' => $partidos
            ]);
      }
}
