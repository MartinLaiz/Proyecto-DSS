<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Usuario;

class UserController extends Controller
{
      public function getUsuario($id){
            return view('perfil',[
                  'usuario' => Usuario::find($id)->first()
            ]);
      }

      public function getUsuarios($equipo = null, $rol = null, $cargo = null, $posicion = null){
            $usuarios = Usuario::all()

            if($equipo!=null){
                  $usuarios = $usuarios->where('equipo.id','=',$equipo);
            }
            if($rol!=null){
                  $usuarios = $usuarios->where('rol','=',$rol);
            }
            if($cargo!=null){
                  $usuarios = $usuarios->where('cargo','=',$cargo);
            }
            if($posicion!=null){
                  $usuarios = $usuarios->where('posicion','=',$posicion);
            }

            return view('usuarios',[
                  'usuarios' => $usuarios->paginate(10);
            ])
      }
}
