<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Validator;
use App\Equipo;
use App\Partido;
use App\Temporada;
use App\Estadio;
use App\Usuario;
use App\Competicion;


class PartidoController extends Controller
{
    public function getPartidos(){
        $partidos = Partido::with('competicion','temporada',
        'equipoLocal','equipoVisitante','estadio')->get();

        return view('partidos', [
                'partidos' => $partidos]);
    }




    public function editarPartidos(){
        $partidos = Partido::with('competicion','temporada',
        'equipoLocal','equipoVisitante','estadio')->paginate(10);


        return view('config/editarPartidos', [
                'partidos' => $partidos]);
    }

    public function eliminarPartido($id){
        $partido = Partido::find($id);
        $partido->delete();
        return back();
    }


    public function formularioInsertar(){

        $equipos = Equipo::where('nombreEquipo','<>','Libre')->get();
        $temporadas = Temporada::with('partido')->get();
        $competiciones = Competicion::with('partido')->get();

        return view ('config/crearPartido',[ 'competiciones' => $competiciones,
        'equipos' => $equipos,'temporadas' => $temporadas]);
    }

    public function crearPartido(Request $request){
        $partido = new Partido();
		dd($request->equipoLocal);
        $partido->equipoLocal_id = $request->equipoLocal;
        $partido->equipoVisitante_id = $request->equipoVisitante;
        $partido->temporada_id = $request->temporada_id;
        $partido->competicion_id = $request->competicion_id;
        $partido->golesLocal = $request->golesLocal;
        $partido->golesVisitante = $request->golesVisitante;
        $partido->fecha = $request->fecha;

        $equipo = Equipo::find($request->equipoLocal);

        $partido->estadio_id = $equipo->estadio_id;

        return $this->verErrores($partido,$request);


    }


    public function modificarPartido(Request $request,$id){
        $partido = Partido::find($id);
        
        $partido->equipoLocal_id = $request->equipoLocal;
        $partido->equipoVisitante_id = $request->equipoVisitante;
        $partido->temporada_id = $request->temporada_id;
        $partido->competicion_id = $request->competicion_id;
        $partido->golesLocal = $request->golesLocal;
        $partido->golesVisitante = $request->golesVisitante;
        $partido->fecha = $request->fecha;

        $equipo = Equipo::find($request->equipoLocal);

        $partido->estadio_id = $equipo->estadio_id;

        return $this->verErrores($partido,$request);


    }



    public function formularioModificar($id){

        $equipos = Equipo::where('nombreEquipo','<>','Libre')->get();
        $temporadas = Temporada::with('partido')->get();

        $competiciones = Competicion::with('partido')->get();

        return view ('config/modificarPartido',[ 'competiciones' => $competiciones,
        'equipos' => $equipos,'temporadas' => $temporadas, 'idmodificar' => $id]);
    }

     public function verErrores($partido,$request){

        if($partido->equipoLocal_id ==  $partido->equipoVisitante_id){
            $validator = Validator::make($request->all(), [
            'title' => '2',
            'body' => '2',
            ]);
            $validator->getMessageBag()->add('unique','Error, no se puede crear un partido con el mismo equipo.');
            return back()->withErrors($validator)->withInput();

        }else{

            try{
                $partido->save();
                if($request->introducir != null){
                    //si quieres introducir los jugaddores de partido
                    return $this->introducirJugadores($partido->id);

                }else{
                    //si quieres introducir solamente el partido
                    return Redirect::to('/partido');
                }
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


	public function introducirJugadores($idPartido){
		$partido = Partido::find($idPartido);
		//busco los jugadores del equipo Local
		$usuariosLocales= Usuario::where('equipo_id','=',$partido->equipoLocal_id)->get();
		//busco los jugadores del equipo visitante
		$usuariosVisitantes= Usuario::where('equipo_id','=',$partido->equipoVisitante_id)->get();


		return view ('config/crearParticipar',[ 'locales' => $usuariosLocales,
		'visitantes'=> $usuariosVisitantes]);

	}
}
