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
}
