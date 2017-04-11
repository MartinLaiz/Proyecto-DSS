@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h3>Modificar jugador</h3>
            <form class="form-horizontal" action="{{ action('JugadorController@editarJugadorPost',[$jugador->id]) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('POST') }}
                  <div class="col-md-6">
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="DNI">DNI:</label>
                              <div class="col-sm-10">
                                    <input class="form-control" type="text" name="dni" id="dni" value="{{ $jugador->dni }}" required>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="Nombre">Nombre:</label>
                              <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $jugador->nombre }}" required>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="Apellidos">Apellidos:</label>
                              <div class="col-sm-10">
                                    <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{ $jugador->apellidos }}" required>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-5 control-label" for="Fecha">Fecha de nacimiento:</label>
                              <div class="col-sm-7">
                                    <input class="form-control" type="date" name="fNac" id="fNac" value="{{ date('d/m/Y', strtotime($jugador->fNac)) }}" required>
                              </div>
                        </div>
                  </div>
                  <div class="col-md-6">
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="posicion">Posición:</label>
                              <div class="col-sm-10">
                                    <select class="form-control" id="posicion" name="posicion" required>
                                          @if($jugador->posicion == 'Delantero')
                                          <option value="Delantero" selected>Delantero</option>
                                          @else
                                          <option value="Delantero">Delantero</option>
                                          @endif
                                          @if($jugador->posicion == 'Mediocentro')
                                          <option value="Mediocentro" selected>Medio</option>
                                          @else
                                          <option value="Mediocentro">Medio</option>
                                          @endif
                                          @if($jugador->posicion == 'Defensa')
                                          <option value="Defensa" selected>Defensa</option>
                                          @else
                                          <option value="Defensa">Defensa</option>
                                          @endif
                                          @if($jugador->posicion == 'Portero')
                                          <option value="Portero" selected>Portero</option>
                                          @else
                                          <option value="Portero">Portero</option>
                                          @endif
                                    </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="dorsal">Dorsal:</label>
                              <div class="col-sm-10">
                                    <input class="form-control" type="number" min="1" max="99" name="dorsal" id="dorsal" value="{{ $jugador->dorsal }}" required>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="cargo">Cargo:</label>
                              <div class="col-sm-10">
                                    <select class="form-control" id="cargo" name="cargo" required>
                                          @if($jugador->posicion == 0)
                                          <option value="0" selected>No capitan</option>
                                          @else
                                          <option value="0">No capitan</option>
                                          @endif
                                          @if($jugador->posicion == 1)
                                          <option value="1" selected>Primer capitan</option>
                                          @else
                                          <option value="1">Primer capitan</option>
                                          @endif
                                          @if($jugador->posicion == 2)
                                          <option value="2" selected>Segundo capitan</option>
                                          @else
                                          <option value="2">Segundo capitan</option>
                                          @endif
                                          @if($jugador->posicion == 3)
                                          <option value="3" selected>Tercer capitan</option>
                                          @else
                                          <option value="3">Tercer capitan</option>
                                          @endif
                                    </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="equipo">Equipo:</label>
                              <div class="col-sm-10">
                                    <select class="form-control" id="equipo" name="equipo" required>
                                          @foreach($equipos as $equipo)
                                          @if($jugador->equipo == $equipo->id)
                                          <option value="{{ $equipo->id }}" selected> {{ $equipo->nombreEquipo }}</option>
                                          @else
                                          <option value="{{ $equipo->id }}"> {{ $equipo->nombreEquipo }}</option>
                                          @endif
                                          @endforeach
                                    </select>
                              </div>
                        </div>
                        <button type="submit" class="btn btn-success" name="button">Modificar</button>
                  </div>
            </form>
      </div>
</div>
@endsection
