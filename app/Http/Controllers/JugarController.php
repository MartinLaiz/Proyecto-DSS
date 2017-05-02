<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Partido;
use App\Temporada;
use App\Competicion;
use App\Equipo;
use App\Usuario;
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
            ->where('temporada_id','=',$temporadaActual->id)->paginate(10);

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


      public function formularioModificar($id){

            $equipos = Equipo::where('nombreEquipo','<>','Libre')->get();
            $temporadas = Temporada::with('jugar')->get();
            
            $competiciones = Competicion::with('jugar')->get();
      
            return view ('config/modificarPartido',[ 'competiciones' => $competiciones,
            'equipos' => $equipos,'temporadas' => $temporadas, 'idmodificar' => $id]);
      }


      public function crearJugar(Request $request){
            $jugar = new Jugar();
            
            $equipoLocal = $request->equipoLocal;
            $equipoVisitante = $request->equipoVisitante;
            //busco el id de partido con este enfrentamiento


            $partido = Partido::where('equipoLocal_id','=',$equipoLocal)
            ->where('equipoVisitante_id','=',$equipoVisitante)->first();

            if($partido == null){
               
                  return $this->verErrores($jugar,$request,$partido);

            }else{
                  $jugar->partido_id = $partido->id;
                  $jugar->temporada_id = $request->temporada_id;
                  $jugar->competicion_id = $request->competicion_id;
                  $jugar->golesLocal = $request->golesLocal;
                  $jugar->golesVisitante = $request->golesVisitante;
                  $jugar->fecha = $request->fecha;
                  return $this->verErrores($jugar,$request,$partido);
            }

      }



      public function modificarJugar(Request $request,$id){

            $jugar = Jugar::find($id);
            
            $equipoLocal = $request->equipoLocal;
            $equipoVisitante = $request->equipoVisitante;
            //busco el id de partido con este enfrentamiento
            $partido = Partido::where('equipoLocal_id','=',$equipoLocal)
            ->where('equipoVisitante_id','=',$equipoVisitante)->first();

            if($partido == null){
               
                  return $this->verErrores($jugar,$request,$partido);

            }else{
                  $jugar->partido_id = $partido->id;
                  $jugar->temporada_id = $request->temporada_id;
                  $jugar->competicion_id = $request->competicion_id;
                  $jugar->golesLocal = $request->golesLocal;
                  $jugar->golesVisitante = $request->golesVisitante;
                  $jugar->fecha = $request->fecha;
                  return $this->verErrores($jugar,$request,$partido);
            }

      }

      public function verErrores($jugar,$request,  $partido){

            if($partido ==null){
                  $validator = Validator::make($request->all(), [
                  'title' => '2',
                  'body' => '2',
                  ]);
                  $validator->getMessageBag()->add('unique','Error, no se puede crear un partido con el mismo equipo.');
                  return back()->withErrors($validator)->withInput();

            }else{
                  $usuarioLocales = Usuario::where('equipo_id','=',$request->equipoLocal)->get();
                  $usuarioVisitante = Usuario::where('equipo_id','=',$request->equipoVisitante)->get();
                  if(   $usuarioLocales->toArray() == null || $usuarioVisitante->toArray() == null){
                        $validator = Validator::make($request->all(), [
                        'title' => '2',
                        'body' => '2',
                        ]);
                        $validator->getMessageBag()->add('unique','Error, el equipo no tiene el minimo de jugadores.');
                        return back()->withErrors($validator)->withInput();
                  }else{
                        try{
                              //guardamos el partido
                              $jugar->save();
                              return $this->crearParticipar($request,$jugar);
                        }
                        catch(\Illuminate\Database\QueryException $e){
                              $validator = Validator::make($request->all(), [
                              'title' => '2',
                              'body' => '2',
                              ]);
                              $validator->getMessageBag()->add('unique','Error, existe ya un partido con las mismas caracteristicas');
                              return back()->withErrors($validator)->withInput();
                        }
                  }
            }

      }


      public function crearParticipar($request,$jugar){
            $usuarioLocales = Usuario::where('equipo_id','=',$request->equipoVisitante)->get();
            dd($usuarioLocales->toArray());
      }

}
