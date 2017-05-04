<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Usuario;
use App\Participar;
use App\Partido;

class ParticiparController extends Controller
{
    public function crearParticipar(Request $request,$idPartido){
       
        //contadores
        $contador = 0;
        $contadorTitularLocal = 0;
        $contadorTitularVisitante = 0;
        $contadorBanquilloLocal = 0;
        $contadorBanquilloVisitante = 0;

        //miro los errores que de checked
        foreach($request->request as $r){
            //dos para que empieze en los datos
            if($contador >=2){
                //separo los string
                $checked = explode(" ", $r);
                if($checked[0] == "titularLocal"){
                    $contadorTitularLocal += 1;
                }else if($checked[0]  == "banquilloLocal"){
                    $contadorBanquilloLocal += 1;
                }else if($checked[0] == "titularVisitante"){
                    $contadorTitularVisitante += 1;
                }else{
                    $contadorBanquilloVisitante += 1;
                }
            }
            $contador++;
        }

        //si se cumple, se mete los datos, si no salta error
        if($contadorTitularLocal == 11 && $contadorBanquilloLocal== 7 
        && $contadorTitularVisitante == 11 && $contadorBanquilloVisitante ==7){
            
            $contador = 0;
            foreach($request->request as $r){
                $participar = new Participar();
                if($contador >=2){
                    //separo los string
                    $checked = explode(" ", $r);
                    //si es titular
                    if($checked[0] == "titularLocal"){
                        
                        $participar->partido_id = $idPartido;
                        $participar->usuario_id = $checked[1];
                        $participar->evento = "prueba";
                        $participar->titular = "si";
                        $participar->local = "si";
                        $participar->save();

                    }else if($checked[0]  == "banquilloLocal"){
                        $participar->partido_id = $idPartido;
                        $participar->usuario_id = $checked[1];
                        $participar->evento = "prueba";
                        $participar->titular = "no";
                        $participar->local = "si";
                        $participar->save();
                    }else if($checked[0] == "titularVisitante"){
                        $participar->partido_id = $idPartido;
                        $participar->usuario_id = $checked[1];
                        $participar->evento = "prueba";
                        $participar->titular = "si";
                        $participar->local = "no";
                        $participar->save();
                    }else{
                        $participar->partido_id = $idPartido;
                        $participar->usuario_id = $checked[1];
                        $participar->evento = "prueba";
                        $participar->titular = "no";
                        $participar->local = "no";
                        $participar->save();
                    }
                }
                $contador++;
            }
            

        }else{

            $validator = Validator::make($request->all(), [
            'title' => '2',
            'body' => '2',
            ]);
            $validator->getMessageBag()->add('unique','Error, tiene que haber 11 titulares y 7 suplentes por equipo.');
            return back()->withErrors($validator)->withInput();

        }
        return Redirect::to('/partido');
    }

    public function verParticipar($idPartido){
        //recojo los datos del partido
        $partido = Partido::with('equipoLocal','equipoVisitante')
        ->where('id','=',$idPartido)->first();
        
        $cantidad = Participar::where('partido_id','=',$idPartido)->count();


        //No tocar las selects
        $participarTitular = Participar::with('usuario')
        ->where('partido_id','=',$idPartido)
        ->where('titular','=','si')->get();


         $participarBanquillo = Participar::with('usuario')
        ->where('partido_id','=',$idPartido)
        ->where('titular','=','no')->get();

        
        if($cantidad != null){
             return view ('config/partido/perfilPartido',[ 'partido' => $partido
             ,'cantidad' => $cantidad,'titulares' => $participarTitular,
             'banquillo'  =>  $participarBanquillo]);
        }else{
            return view ('config/partido/perfilPartido',[ 'partido' => $partido
            ,'cantidad' => $cantidad]);
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
