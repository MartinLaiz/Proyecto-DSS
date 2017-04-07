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
                  <div class="row">
                        <label class="col-md-5" for="equipoSel">Selecciona un equipo:</label>
                        <label class="col-md-5" for="equipoSel">Selecciona una posición:</label>
                  </div>
                  <form class="row" action="{{ action('JugadorController@getJugadores') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="col-md-5 form-group">
                              <select class="form-control" name="equipoSel" id="equipoSel">
                                    <option value="Todos" selected>Todos los equipos</option>
                                    @foreach($equipos as $unEquipo)
                                    <option value="{{ $unEquipo->id }}">{{ $unEquipo->nombreEquipo }}</option>
                                    @endforeach
                              </select>
                        </div>
                        <div class="col-md-5">
                              <select class="form-control" name="posicion" id="posicion">
                                    <option value="Todas" selected>Todas las posiciones</option>
                                    <option value="Delantero">Delantero</option>
                                    <option value="Medio">Medio</option>
                                    <option value="Defensa">Defensa</option>
                                    <option value="Portero">Portero</option>
                              </select>
                        </div>
                        <div class="col-md-2 text-center">
                              <button class="btn btn-success btn-block" type="submit">Seleccionar jugadores</button>
                        </div>
                  </form>
            </div>
            {{ $jugadores->links() }}
            @if(count($jugadores) > 0)
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
                        @foreach($jugadores as $jugador)
                        <tr>
                              <td><a href="{{ action('JugadorController@getJugador',$jugador->id) }}">{!!$jugador->nombre!!}</a></td>
                              <td><a href="{{ action('JugadorController@getJugador',$jugador->id) }}">{!!$jugador->apellidos!!}</a></td>
                              <td>{!!$jugador->fNac!!}</td>
                              <td>{!!$jugador->posicion!!}</td>
                              <td>
                                    @if($jugador->cargo == 1)
                                    Primer capitán
                                    @elseif($jugador->cargo == 2)
                                    Segundo capitán
                                    @elseif($jugador->cargo == 3)
                                    Tercer capitán
                                    @else
                                    Sin cargo
                                    @endif
                              </td>
                              <td><a href="{{ action('EquipoController@getEquipo',$jugador->equipo) }}">{!!$jugador->nombreEquipo!!}</a></td>
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
                        No conocemos jugadores libres
                        @else
                        No conocemos jugadores de éste equipo
                        @endif
                  </strong>
                  <br>
            </div>
            @endif
      </div>
</div>
@endsection
