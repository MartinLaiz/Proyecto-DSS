<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Usuario;
use App\Equipo;

class UsuarioController extends Controller
{
      public function nada(){
            return view('home');
      }
      public function getUsuario($id){
            return view('prueba');
      }

      public function getUsuarios(Request $request = null, $equipo = null, $rol = null, $cargo = null, $posicion = null){
            $equipo = $request->input('equipo','Todos');
            $rol = $request->input('rol','0');
            $cargo = $request->input('cargo','-1');
            $posicion = $request->input('posicion','Todas');

            $usuarios = Usuario::where('rol','=',$rol);
            if($equipo!='Todos'){
                  $usuarios = $usuarios->where('equipo_id','=',$equipo);
                  $equipo = Equipo::where('id','=',$equipo)->first()->nombreEquipo;
            }
            if($rol==1){
                  if($posicion!='Todas'){
                        $usuarios = $usuarios->where('posicion','=',$posicion);
                  }
            }
            if($rol==2){
                  if($cargo!=-1){
                        $usuarios = $usuarios->where('cargo','=',$cargo);
                  }
            }
            $usuarios = $usuarios->with('equipo')->get();

            $roles = ['Jugadores', 'Entrenadores','Directores','Administradores'];
            $rol = $roles[$rol];

            return view('usuarios',[
                  'usuarios' => $usuarios,
                  'rol' => $rol,
                  'posicion' => $posicion,
                  'equipo' => $equipo,
                  'equipos' => Equipo::get()
            ]);
      }



      public function getForm(){
            return view('config.crearUsuario', array(
                  'listaEquipos' => Equipo::orderBy('nombreEquipo')->get()
                  )
            );
      }

      public function crearModificarUsuario(Request $request){
            //Control de errores
            $errors = false;
            $validator = Validator::make($request->all(),[]);
            //Campos comunes
            $usuario = new Usuario();
            $usuario->dni = $request->dni;
            $usuario->nombre = $request->nombre;
            $usuario->apellidos = $request->apellidos;
            $usuario->fNac = $request->fNac;
            $usuario->salario = $request->salario;
            $usuario->equipo_id = $request->equipo_id;
            $usuario->rol = $request->rol;//Pendiente de la vista para ver si cambia

            //Roles: 0-Jugador, 1-Entrenador, 2-Director, 3-Administrador
            if($usuario->rol < 2){
                  //Entrenador o jugador: cargo
                  $usuario->cargo = $request->cargo;

                  if($usuario->rol == 0){
                        //Jugador: dorsal
                        $usuarios = DB::table('usuarios')->where('equipo_id','=',$usuario->equipo_id);
                        foreach($usuarios as $usu){
                              if($usuario->dorsal == $usu->dorsal){
                                    $errorDorsal = $usu->nombre.' ya tiene esa dorsal';
                                    $validator->getMessageBag()->add('dorsal', $errorDorsal);
                                    $errors = true;
                                    break;
                              }
                        }
                        //Jugador: posición
                        $usuario->posicion = $request->posicion;
                  }

                  //Intentamos insertar/modificar el usuario
                  try{
                        $usuario->save();
                  } catch(QueryException $e){
                        $validator->getMessageBag()->add('dni','Ese DNI ya existe');
                        $errors = true;
                  }
                  finally{
                        if($errors) return Redirect::back()->withErrors($validator)->withInput();
                  }

            }
            return Redirect::to('usuarios');//Probablemente ésto cambiará
      }

      public function borrarUsuario($id){
            //Comprobamos que existe
            try{
                  $usuario = Usuario::findOrFail($id);
                  $usuario->delete();
            } catch (Illuminate\Database\Eloquent\ModelNotFoundException $excepcion){

            }
      }

      public function getConfig(){
            return view('config.configuracion');
      }
}
