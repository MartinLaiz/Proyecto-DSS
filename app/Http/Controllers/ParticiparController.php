<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Participar;
use App\Partido;

class ParticiparController extends Controller
{
    public function crearParticipar(Request $request,$id){
        $participar = new Participar();
        $contadorTitularLocal = 0;
        $contadorTitularVisitante = 0;
        $contadorBanquilloLocal = 0;
        $contadorBanquilloVisitante = 0;

        dd($request);
        //cuenta el total de jugadores que hay
        foreach($request->request as $r){
            //si hay dato cuenta uno
            if($request->titularLocal != null){
                $contadorTitularLocal += 1;
            }else if($request->titularVisitante != null){
                $contadorBanquilloLocal += 1;
            }else if($request->banquilloLocal != null){
                $contadorBanquilloLocal += 1;
            }else{
           
                $contadorBanquilloVisitante += 1;
            }
        }
        dd($contadorTitularLocal );
        $participar->usuario_id = $request->usuario_id;
        $participar->jugar_id = $request->jugar_id;
        $participar->evento_id = $request->evento_id;
        $participar->save();

        return back();
    }

    public function verParticipar($idPartido){
        $partido = Partido::with('equipoLocal','equipoVisitante')
        ->where('id','=',$idPartido)->first();


        $participar = Participar::where('partido_id','=',$idPartido)->first();

        if($participar != null){
             return view ('config/partido/perfilPartido',[ 'partido' => $partido
             ,'cantidad' => 0]);
        }else{
            return view ('config/partido/perfilPartido',[ 'partido' => $partido
            ,'cantidad' => 0]);
        }
    }


    public function formularioInsertar($idPartido){
        $partido = Partido::find($idPartido);
        //obtengo los jugadores locales
        $locales = Usuario::where('equipo_id','=',$partido->equipoLocal_id)
        ->orderBy('posicion')->get();
       
        //obtengo los jugadores visitantes
        $visitantes = Usuario::where('equipo_id','=',$partido->equipoVisitante_id)
        ->orderBy('posicion')->get();

        return view ('config/partido/crearParticipar',[ 'partido' => $partido
        ,'locales' => $locales,'visitantes' => $visitantes]);

    }
}
