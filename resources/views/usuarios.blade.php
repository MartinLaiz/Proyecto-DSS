@extends('layouts.master')
@section('title', 'Plantilla')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <br><br>
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
                                          <option value="2">Director</option>
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
                        <div class="row col-lg-3 col-md-4 col-sm-4 text-center">
                              <button class="btn btn-success btn-block" type="submit">Filtrar jugadores</button>
                        </div>
                  </form>
            </div>
            <br>
            @if(count($usuarios) > 0)
            <div class="row" id="jugadores">
                  @foreach($usuarios as $usuario)
                  <div class="well col-lg-2 col-md-3 col-sm-4">
                        <div class="">
                              <img class="img-responsive" src="./images/users/{{ $usuario->id }}.png" alt="User image" onerror="this.src = './images/users/defaultUser.png'">
                              <a href="{{ action('UsuarioController@getUsuario',$usuario->id) }}">
                                    <h4>{{ $usuario->nombre }}</h4>
                                    <h5>{{ $usuario->apellidos }}</h5>
                              </a>
                              <h6></h6>
                        </div>
                  </div>
                  @endforeach
            </div>
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
