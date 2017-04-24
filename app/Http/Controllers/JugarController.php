<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partido;
use App\Temporada;
use App\Competicion;
use Carbon\Carbon;
use Validator;

class JugarController extends Controller
{


    public function getJugar(){
        //obtengo la ultima temporada
        $ultimaTemp = Temporada::temporadaUltima();
        $partidos = 
        
    }




}