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

class TemporadaController extends Controller
{


    public function crearTemporada(Request $request){
        //cogemos la ultima temporada
        $temporada = Temporada::orderby('nombre','desc')->first();
        
        $numeros = explode("/",  $temporada ->nombre);
        $num1 = $numeros[0] + 1;
        $num2 = $numeros[1] + 1;

        $temporada = New Temporada();

        // 'inicio'=>'2016-08-01', 'fin' => '2017-06-30']
        $valor1= $num1;
        $valor1=trim($valor1);
        $valor2= $num2;
        $valor2=trim($valor2);
        $temporada->nombre = $valor1 . "/" . $valor2;
        
        $valor1 = "20" . $valor1;
        $temporada->inicio = $valor1 ."-08-01";

        $valor2 = "20" .$valor2;
        $temporada->fin = $valor2 ."-06-30";
        $temporada->save();

        $validator = Validator::make($request->all(), [
        'title' => '2',
        'body' => '2',
        ]);
        $validator->getMessageBag()->add('unique','Se ha creado la temporada ' . $temporada->nombre);
        return back()->withErrors($validator)->withInput();


        
    }

}