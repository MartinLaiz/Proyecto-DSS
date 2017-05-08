@extends('layouts.master')
@section('title', 'Perfil de jugador')
@section('content')
@include('cabecera',array('section'=>'plantilla'))


<div class="contenedor row">
      <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 toppad" >
                  <br>

                  <div class="panel panel-info">
                        <div class="panel-heading">
                              <h3 class="panel-title">Perfil</h3>
                        </div>
                        <div class="panel-body">
                              <div class="row">
                                    <form action="{{ action('UsuarioController@modificar', $usuario->id) }}" method="POST">
                                          {{ csrf_field() }}
                                          {{ method_field('POST') }}
                                          <div class="col-md-3 col-lg-3 " align="center">
                                                <div class="col-md-12 col-lg-12">
                                                      <img alt="User Pic" src="/images/users/{{ $usuario->dni }}.png" onerror="this.src = '/images/users/defaultUser.png'" class="img-circle img-responsive">
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                      <input style="display:none" type="file" name="foto" id="foto" value="foto">
                                                      <br>
                                                      <input type="button" class="btn btn-primary btn-block" name="fakeFoto" onclick="document.getElementById('foto').click()" value="Elegir imagen">
                                                      <br><br>
                                                </div>
                                          </div>
                                          <div class=" col-md-9 col-lg-9 ">
                                                <table class="table table-user-information">
                                                      <tbody>
                                                            <tr>
                                                                  <td>DNI:</td>
                                                                  <td><input class="form-control" type="text" name="dni" id="dni" value="{{ $usuario->dni }}"></td>
                                                            </tr>
                                                            <tr>
                                                                  <td>Nombre:</td>
                                                                  <td><input class="form-control" type="text" name="nombre" id="nombre" value="{{ $usuario->nombre }}"></td>
                                                            </tr>
                                                            <tr>
                                                                  <td>Apellidos:</td>
                                                                  <td><input class="form-control" type="text" name="apellidos"id="apellidos" value="{{ $usuario->apellidos }}"></td>
                                                            </tr>

                                                            <tr>
                                                                  <td>Fecha de nacimiento:</td>
                                                                  <td><input class="form-control" type="date" name="fNac" id="fNac" value="{{ date('Y-m-d',strtotime($usuario->fNac)) }}"></td>
                                                            </tr>

                                                            <tr>
                                                                  <td>Salario:</td>
                                                                  <td>
                                                                        <div class="">
                                                                              <input class="form-control" type="number" name="salario" id="salario" min="0" value="{{ $usuario->salario }}">
                                                                        </div>
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td>Rol:</td>
                                                                  <td>
                                                                        <div class="">
                                                                              <select class="form-control" name="rol" id="rol" onchange="cargoFilter()">
                                                                                    <option value="0" @if($usuario->rol == 0) selected @endif>Jugador</option>
                                                                                    <option value="1" @if($usuario->rol == 1) selected @endif>Entrenador</option>
                                                                                    <option value="2" @if($usuario->rol == 2) selected @endif>Director</option>
                                                                                    <option value="3" @if($usuario->rol == 3) selected @endif>Administrador</option>
                                                                              </select>
                                                                        </div>
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td> Posición:</td>
                                                                  <td>
                                                                        <div class="">
                                                                              <select class="form-control" name="posicion" id="posicion">
                                                                                    <option value="0" @if($usuario->posicion == 0) selected @endif>No asignado</option>
                                                                                    <option value="1" @if($usuario->posicion == 1) selected @endif>Portero</option>
                                                                                    <option value="2" @if($usuario->posicion == 2) selected @endif>Defensa</option>
                                                                                    <option value="3" @if($usuario->posicion == 3) selected @endif>Medio</option>
                                                                                    <option value="4" @if($usuario->posicion == 4) selected @endif>Delantero</option>
                                                                              </select>
                                                                        </div>
                                                                  </td>
                                                            </tr>

                                                            <tr>
                                                                  <td>Cargo:</td>
                                                                  <td>
                                                                        <div class="">
                                                                              <select class="form-control" name="cargo" id="cargo">
                                                                                    <option value="0" @if($usuario->cargo == 0) selected @endif>Sin cargo</option>
                                                                                    <option value="1" @if($usuario->cargo == 1) selected @endif>Primer capitán</option>
                                                                                    <option value="2" @if($usuario->cargo == 2) selected @endif>Segundo capitán</option>
                                                                                    <option value="3" @if($usuario->cargo == 3) selected @endif>Tercer capitán</option>
                                                                              </select>
                                                                        </div>
                                                                  </td>
                                                            </tr>
                                                            <tr>
                                                                  <td>Dorsal:</td>
                                                                  <td>
                                                                        <div class="">
                                                                              <input class="form-control" type="number" name="dorsal" id="dorsal" min="0" value="{{ $usuario->dorsal }}">
                                                                        </div>
                                                                  </td>
                                                            </tr>
                                                      </tbody>
                                                </table>
                                                <div class="row">
                                                      <div class="col-md-6 col-lg-6">
                                                            <input class="form-control" type="password" name="password" id="password" value="">
                                                      </div>
                                                      <div class="col-md-6 col-lg-6">
                                                            <input class="form-control" type="password" name="password" id="password" value="">
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-md-3 col-md-offset-9 col-lg-3 col-lg-offset-9">
                                                <input type="submit" class="btn btn-success btn-block" value="Editar usuario">
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<script type="text/javascript">
      function eliminarOpciones(){
            var element = document.getElementById('cargo');
            while (element.options.length != 0) {
                  element.remove(0);
            }
            var pos = document.getElementById('posicion');
            while (pos.options.length != 0) {
                  pos.remove(0);
            }
      }

      function opcionesJugador(){
            eliminarOpciones();
            var element = document.getElementById('cargo');
            var options = ['Sin cargo','Primer capitan','Segundo capitan','Tercer capitan'];
            for (var i = 0; i < 4; i++) {
                  var option = document.createElement('option');
                  option.text = options[i];
                  option.value = i;
                  element.add(option);
            }
            element.value = {{ $usuario->cargo }};
            element = document.getElementById('posicion');
            var options = ['Portero','Defensa','Medio','Delantero'];
            for (var i = 0; i < 4; i++) {
                  var option = document.createElement('option');
                  option.text = options[i];
                  option.value = i+1;
                  element.add(option);
            }
            element.value = {{ $usuario->posicion }};
      }

      function opcionesEntrenador(){
            eliminarOpciones();
            var element = document.getElementById('cargo');
            var options = ['Primer entrenador','Segundo entrenador'];
            for (var i = 0; i < 2; i++) {
                  var option = document.createElement('option');
                  option.text = options[i];
                  option.value = i+1;
                  element.add(option);
            }
            var pos = document.getElementById('posicion');
            var option = document.createElement('option');
            option.text = "No disponible";
            option.value = -1;
            pos.add(option);
      }

      function cargoFilter(){
            var posicion = document.getElementById('posicion');
            posicion.disabled = true;
            var rol = document.getElementById('cargo');
            rol.disabled = true;

            var option = document.getElementById('rol').value;
            if(option == 0){
                  posicion.disabled = false;
                  rol.disabled = false;
                  opcionesJugador();
            }
            else if (option == 1) {
                  opcionesEntrenador();
                  rol.disabled = false;
            }
      }
      window.onload = cargoFilter;
</script>
@endsection
