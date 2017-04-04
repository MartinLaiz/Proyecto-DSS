<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Validator;
use App\Equipo;
use App\Partido;
class PartidoController extends Controller
{
    public function getPartidos(){
/*
select('team1,equipoLocal as idlocal, team2.equipoVisitante as idVisitante'
                           ,'team1.nombreEquipo as nameTeam1','team2.nombreEquipo as nameTeam2'
                            ,'partido.golesLocal','partido.golesVisitante','partido.fecha')
                            ->
*/
        $teams = Partido::join('equipo as team1','partido.equipoLocal','=','team1.id')->
                              join('equipo as team2','partido.equipoVisitante','=','team2.id')->
                              select('partido.*','team1.nombreEquipo as equipoLocal','team2.nombreEquipo as equipoVisitante')->paginate(5);


        return view('partidos', [
                                 'values' => [
                                             'equipoLocal'=> 'Equipo Local',
                                             'golesLocal'=>'Goles Local',
                                             'golesVisitante'=>'Goles Visitante',
                                             'equipoVisitante'=> 'Equipo Visitante',
                                             'fecha'=>'Fecha',
                                             'tipo' => 'Tipo'],
                                 'lista' =>  $teams,
                                 ]
                    );

   }


   public function getPartidosConfig(){
        $teams = Partido::join('equipo as team1','partido.equipoLocal','=','team1.id')->
                              join('equipo as team2','partido.equipoVisitante','=','team2.id')->
                              select('partido.*','team1.nombreEquipo as equipoLocal','team2.nombreEquipo as equipoVisitante')->paginate(5);

        return view('editarPartidos', [
                                 'values' => [
                                             'equipoLocal'=> 'Equipo Local',
                                             'golesLocal'=>'Goles Local',
                                             'golesVisitante'=>'Goles Visitante',
                                             'equipoVisitante'=> 'Equipo Visitante',
                                             'fecha'=>'Fecha',
                                             'tipo' => 'Tipo'],
                                 'lista' =>  $teams,
                                 ]
                    );

   }


   public function EliminarPartido($id){
        $partido = Partido::find($id);
        $partido->delete();
        return back();
   }


   public function formularioModificar($id){

        $equipos = Equipo::orderBy('nombreEquipo')->where('nombreEquipo',' <>','Libre')->get();

        return view ('modificarPartido',[
                                            'idmodificar' => $id],[
                                            'listaEquipos' =>  $equipos
                                            ]);
   }

   public function formularioInsertar(){

        return view ('crearPartido',['listaEquipos' => Equipo::orderBy('nombreEquipo')->get()]);
   }



   public function modificarPartido(Request $request,$id){
       $partido = Partido::find($id);
       $partido->equipoLocal = $request->equipoLocal;
       $partido->equipoVisitante = $request->equipoVisitante;
       $partido->golesLocal = $request->golesLocal;
       $partido->golesVisitante = $request->golesVisitante;
       $partido->fecha = $request->fecha;
       $partido->tipo = $request->tipo;
       //comprobamos si existe el equipo
       $partidosRepetido =Partido::where('equipoLocal','=',$request->equipoLocal)
       ->where('equpoVisitante','=',$request->equipoVisitante)
       ->where('tipo','=',$request->tipo);

       if($partido->equipoLocal ==  $partido->equipoVisitante){
            $validator = Validator::make($request->all(), [
            'title' => '2',
            'body' => '2',
        ]);
           $validator->getMessageBag()->add('unique','Error, no puede haber partido con el mismo equipo.');
           return back()->withErrors($validator)->withInput();

       }else{
       //Error de partido que existe
            try{
                $partido->save();
                return Redirect::to('/config/partidos');
            }
            catch(\Illuminate\Database\QueryException $e){
                    $validator = Validator::make($request->all(), [
                    'title' => '2',
                    'body' => '2',
                ]);
                $validator->getMessageBag()->add('unique','Error, existe ya un partido con las mismas caracteristicas');
                return back()->withErrors($validator)->withInput();
            }

            //error del mismo equipo
       }

       
       
   }


    public function crearPartido(Request $request){
         $partido = new Partido();
         $partido->equipoLocal = $request->equipoLocal;
         $partido->equipoVisitante = $request->equipoVisitante;
         $partido->golesLocal = $request->golesLocal;
         $partido->golesVisitante = $request->golesVisitante;
         $partido->fecha = $request->fecha;
         $partido->tipo = $request->tipo;
         $partido->save();


       return Redirect::to('/config/partidos');
   }




}
