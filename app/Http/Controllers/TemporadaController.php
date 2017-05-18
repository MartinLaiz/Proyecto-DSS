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
use DateTime;

class TemporadaController extends Controller
{


    public function crearTemporada(Request $request){

        $fecha = explode("-",  $request->inicio);
        //me quedo con el año
        $aux = $fecha[0];
        $year1 = "";
        for($i= 0;$i < strlen($aux);$i++){
            //recojo los dos ultimos digitos para el año
            if( strlen($aux)- $i <= 2){
                $year1 =  $year1 . $aux[$i];
            }
        }

        $fecha = explode("-",  $request->fin);
        //me quedo con el año
        $aux = $fecha[0];
        $year2 = "";
        for($i= 0;$i < strlen($aux);$i++){
            //recojo los dos ultimos digitos para el año
            if( strlen($aux)- $i <= 2){
                $year2 =  $year2 . $aux[$i];
            }
        }

        //si la temporada se hace en el mismo año da error
        if($year1 == $year2){
             $validator = Validator::make($request->all(), [
                'title' => '2',
                'body' => '2',
                ]);
                $validator->getMessageBag()->add('unique','Error, las fechas inicio y fin tiene que ser de años distintos.');
                return back()->withErrors($validator)->withInput();
        }else{
            try{
                $yearName = $year1 . "/" . $year2;
                $temporada = New Temporada();

                $temporada->nombre = $yearName;
                $temporada->inicio = $request->inicio;
                $temporada->fin = $request->fin;
                $temporada->save();
                return back();
            }catch(\Illuminate\Database\QueryException $e){
                $validator = Validator::make($request->all(), [
                'title' => '2',
                'body' => '2',
                ]);
                $validator->getMessageBag()->add('unique','Error, ya existe esa temporada.');
                return back()->withErrors($validator)->withInput();
            }
            
        }
        
    }


    public function eliminarTemporada($id){
        $temporada = Temporada::find($id);
        $partidos = Partido::where('temporada_id','=',$id)->get();
        foreach($partidos as $partido){
            $partido->delete();
        }
        $temporada->delete();
        return back();
    }


    public function editar(){
        $temporadas = Temporada::all();

        return view('config/editarTemporada',['temporadas' => $temporadas]);
    }

    public function modificarTemporda(Request $request,$id){


        $fecha = explode("-",  $request->inicio);
        //me quedo con el año
        $aux = $fecha[0];
        $year1 = "";
        for($i= 0;$i < strlen($aux);$i++){
            //recojo los dos ultimos digitos para el año
            if( strlen($aux)- $i <= 2){
                $year1 =  $year1 . $aux[$i];
            }
        }

        $fecha = explode("-",  $request->fin);
        //me quedo con el año
        $aux = $fecha[0];
        $year2 = "";
        for($i= 0;$i < strlen($aux);$i++){
            //recojo los dos ultimos digitos para el año
            if( strlen($aux)- $i <= 2){
                $year2 =  $year2 . $aux[$i];
            }
        }

        //si la temporada se hace en el mismo año da error
        if($year1 == $year2){
             $validator = Validator::make($request->all(), [
                'title' => '2',
                'body' => '2',
                ]);
                $validator->getMessageBag()->add('unique','Error, las fechas inicio y fin tiene que ser de años distintos.');
                return back()->withErrors($validator)->withInput();
        }else{
            try{
                $yearName = $year1 . "/" . $year2;
                $temporada = Temporada::find($id);

                $temporada->nombre = $yearName;
                $temporada->inicio = $request->inicio;
                $temporada->fin = $request->fin;
                $temporada->save();
                return back();
            }catch(\Illuminate\Database\QueryException $e){
                $validator = Validator::make($request->all(), [
                'title' => '2',
                'body' => '2',
                ]);
                $validator->getMessageBag()->add('unique','Error, ya existe esa temporada.');
                return back()->withErrors($validator)->withInput();
            }
            
        }

    }


}