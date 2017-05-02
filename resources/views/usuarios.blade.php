@extends('layouts.master')
@section('title', 'Plantilla')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            @if($equipo == 'Todos')
            <h2>Todos los jugadores</h2>
            @elseif($equipo == 'Libre')
            <h2>Jugadores libres</h2>
            @else
            <h2>Jugadores del {{ $equipo }}</h2>
            @endif
            <div class="row">
                  <form action="{{ action('UsuarioController@getUsuarios') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="form-group row">
                              <div class="col-lg-3 col-md-4 col-sm-4">
                                    <select class="form-control" name="equipo" id="equipo">
                                          <option value="Todos" selected>Todos los equipos</option>
                                          @foreach($equipos as $unEquipo)
                                          <option value="{{ $unEquipo->id }}">{{ $unEquipo->nombreEquipo }}</option>
                                          @endforeach
                                    </select>
                              </div>
                              <div class="col-lg-3 col-md-4 col-sm-4">
                                    <select class="form-control" onchange="cargoFilter()" name="rol" id="rol">
                                          <option value="0">Jugadores</option>
                                          <option value="1">Entrenadores</option>
                                          <option value="2">Directores</option>
                                          <option value="3">Administradores</option>
                                    </select>
                              </div>
                              <div class="col-lg-3 col-md-4 col-sm-4">
                                    <select class="form-control" name="cargo" id="cargo">
                                          <option value="-1" selected>Todos los cargos</option>
                                          <option value="0">Sin cargo</option>
                                          <option value="1">Primer capitan</option>
                                          <option value="2">Segundo capitan</option>
                                          <option value="3">Tercer capitan</option>
                                    </select>
                              </div>
                              <div class="col-lg-3 col-md-4 col-sm-4">
                                    <select class="form-control" name="posicion" id="posicion">
                                          <option value="Todas" selected>Todas las posiciones</option>
                                          <option value="Delantero">Delantero</option>
                                          <option value="Medio">Medio</option>
                                          <option value="Defensa">Defensa</option>
                                          <option value="Portero">Portero</option>
                                    </select>
                              </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 text-center">
                              <button class="btn btn-success btn-block" type="submit">Filtrar jugadores</button>
                        </div>
                  </form>
            </div>
            {{ $usuarios->links() }}
            @if(count($usuarios) > 0)
            <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                  <thead>
                        <tr>
                              <th>Nombre</th>
                              <th>Apellidos</th>
                              <th>Fecha de nacimiento</th>
                              <th>Posición</th>
                              <th>Cargo</th>
                              @if($equipo == 'Todos')
                              <th>Equipo</th>
                              @endif

                        </tr>
                  </thead>
                  <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                              <td><a href="">{!!$usuario->nombre!!}</a></td>
                              <td><a href="">{!!$usuario->apellidos!!}</a></td>
                              <td>{{date('d/m/Y',strtotime($usuario->fNac))}} ({{ date('Y')-date('Y',strtotime($usuario->fNac)) }})</td>
                              <td>
                                    @if($usuario->posicion == 1)
                                    Portero
                                    @elseif($usuario->posicion == 2)
                                    Defensa
                                    @elseif($usuario->posicion == 3)
                                    Medio
                                    @elseif($usuario->posicion == 4)
                                    Delantero
                                    @endif
                              </td>
                              <td>
                                    @if($usuario->cargo == 1)
                                    Primer capitán
                                    @elseif($usuario->cargo == 2)
                                    Segundo capitán
                                    @elseif($usuario->cargo == 3)
                                    Tercer capitán
                                    @else
                                    Sin cargo
                                    @endif
                              </td>
                              <td><a href="">{!!$usuario->equipo->nombreEquipo!!}</a></td>
                        </tr>
                        @endforeach
                  </tbody>
            </table>
            @else
            <br>
            <div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>    @if($equipo == 'Todos')
                        No hay jugadores en la base de datos
                        @elseif($equipo == 'Libre')
                        No hay jugadores libres
                        @else
                        No conocemos jugadores de éste equipo
                        @endif
                  </strong>
                  <br>
            </div>
            @endif
      </div>
</div>
<script type="text/javascript">
      function eliminarOpciones(){
            var element = document.getElementById('cargo');
            while (element.options.length>1) {
                  element.remove(1);
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
                  rol.disabled = false;
                  opcionesEntrenador();
            }
      }
</script>
@endsection
