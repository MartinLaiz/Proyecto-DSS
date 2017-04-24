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
        $ultimaTemp = Temporada::all();
        
        $ultimaTemp->temporadaUltima()->first();
        //conseguimos todos los partidos de la temporada ultima
        $partidos = Jugar::partidos($ultimaTem->id)->get();
        //consigo los nombre de los equipos de partidos

        return view('partidos', [
                                'values' => [
                                            'competicion_id'=> 'Competicion',
                                            'temporada_id'=>'Temporada',
                                            'partido_id'=>'Partido',
                                            'golesLocal'=> 'Goles Local',
                                            'golesVisitante'=>'Goles Visitante',
                                            'fecha' => 'Fecha'],
                                'lista' =>   $partidos,
                                ]
                    );

    }
}