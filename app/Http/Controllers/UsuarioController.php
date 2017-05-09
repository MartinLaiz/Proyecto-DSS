<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Redirect;
use App\Usuario;
use App\Equipo;

class UsuarioController extends Controller
{
      public function getUsuarios(Request $request){
            $equipo = $request->input('equipo','Todos');
            $rol = $request->input('rol','0');
            $cargo = $request->input('cargo','-1');
            $posicion = $request->input('posicion',0);

            $usuarios = Usuario::with('equipo')->where('rol','=',$rol);
            if($rol < 3 ){
                  if($equipo != 'Todos'){
                        $usuarios = $usuarios->where('equipo_id','=',$equipo);
                  }
                  if($cargo>=0){
                        $usuarios = $usuarios->where('cargo','=',$cargo);
                  }
                  if($posicion != 0){
                        $usuarios = $usuarios->where('posicion','=',$posicion);
                  }
            }
            else {
                  $equipo = 'Todos';
                  $cargo = -1;
                  $posicion = 'Todas';
            }

            return view('usuarios',[
                  'usuarios' => $usuarios->paginate(18),
                  'equipo' => $equipo,
                  'rol' => $rol,
                  'cargo' => $cargo,
                  'posicion' => $posicion,
                  'equipos' => Equipo::get()
            ]);
      }

      public function getUsuario($id){
            return view('usuario',[
                  'usuario' => Usuario::with('equipo')->find($id)
            ]);
      }

      public function getFormUpdate($id){
            return view('config.modificarUsuario', [
                  'usuario' => Usuario::find($id)
            ]);
      }

      public function getFormCreate(){
            return view('config.crearUsuario', array(
                  'listaEquipos' => Equipo::orderBy('nombreEquipo')->get()
                  )
            );
      }

      public function getUsuariosUpdate(){

      }

      public function getConfig(){
            return view('config.configuracion');
      }

      public function create(Request $request){
            $usuario = new Usuario();
            $usuario->dni = $request->input('dni');
            $usuario->nombre = $request->input('nombre');
            $usuario->apellidos = $request->input('apellidos');
            $usuario->fNac = $request->input('fNac');
            $usuario->salario = $request->input('salario');
            $usuario->posicion = $request->input('posicion');
            $usuario->rol = $request->input('rol');

            if($usuario->rol < 2){
                  $usuario->cargo = $request->input('cargo');
            }

            if($usuario->rol == 0){
                  $usuario->dorsal = $request->input('drosal');
                  $usuario->posicion = $request->input('posicion');
            }

            $usuario->password = bcrypt($request->input('password'));

      }

      public function update(Request $request, $id){
            //Control de errores
            $errors = false;
            $validator = Validator::make($request->all(),[]);
            //Campos comunes
            $usuario = Usuario::find($id);
            $usuario->dni = $request->dni;
            $usuario->nombre = $request->nombre;
            $usuario->apellidos = $request->apellidos;
            $usuario->fNac = $request->fNac;
            $usuario->salario = $request->salario;
            if($request->equipo != null) $usuario->equipo_id = $request->equipo;
            $usuario->rol = $request->rol;

            if($usuario->rol == 0){ //Jugador
                  if(Usuario::where('equipo_id','=',$request->equipo)->where('dorsal','=',$request->dorsal)->where('id','<>',$id)->first() != null){
                        $validator->getMessageBag()->add('dorsal','Existe jugador en el mismo equipo con ese dorsal');
                  }
                  else{
                        $usuario->dorsal = $request->dorsal;
                  }

                  if($request->cargo != 0 && Usuario::where('equipo_id','=',$request->equipo)->where('cargo','=',$request->cargo)->where('id','<>',$id)->first() != null){
                        $validator->getMessageBag()->add('cargo','Existe jugador en el mismo equipo con ese cargo');
                  }
                  else{
                        $usuario->cargo = $request->cargo;
                  }
                  $usuario->posicion = $request->posicion;
            }
            elseif ($usuario->rol == 1) { //Entrenador
                  if($request->cargo != 0 && Usuario::where('equipo_id','=',$request->equipo)->where('cargo','=',$request->cargo)->where('id','<>',$id)->first() != null){

                        $validator->getMessageBag()->add('cargo','Existe entrenador en el mismo equipo con ese cargo');
                  }
                  else{
                        $usuario->cargo = $request->cargo;
                  }
            }
            if($request->password != null ){
                  $usuario->password = bcrypt($request->password);
            }
            if($request->foto != null ){
                  $usuario->foto = $request->foto;
            }
            try {
                  $usuario->save();
            } catch (\Illuminate\Database\QueryException $e) {
                  $validator->getMessageBag()->add('dni','Existe usuario con ese dni');
            }


            if($validator->getMessageBag()->count()>0) return Redirect::back()->withErrors($validator);


            return redirect()->action('UsuarioController@getUsuario',[ 'id' => $id ]);//Probablemente ésto cambiará
      }

      public function delete($id){
            //Comprobamos que existe
            try{
                  $usuario = Usuario::findOrFail($id);
                  $usuario->delete();
            } catch (Illuminate\Database\Eloquent\ModelNotFoundException $excepcion){

            }
      }
}
