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


    public function formularioIntertar(){
        //consigo todos los equipo
        $equipos = Equipo::where('nombreEquipo','<>','Libre')->get();
        $temporada = Temporada::all();

        dd($temporada->toArray());
    }


    public function editar(){
        //consigo todos los equipo
        $competiciones = Competicion::all();
    
        return view('config/competicion/editarCompeticion',['competiciones' => $competiciones]);
    }



}