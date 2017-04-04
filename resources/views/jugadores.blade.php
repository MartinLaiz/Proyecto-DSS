@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            @if($equipo == 'Todos')
            <h2>Todos los jugadores</h2>
            @else
            <h2>Jugadores del {{ $equipo }}</h2>
            @endif
            <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Seleccionar equipo <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                        @foreach($equipos as $unEquipo)
                        <li><a href="{{ action('JugadorController@getJugadoresEquipo',[$unEquipo->id]) }}">{{ $unEquipo->nombreEquipo }}</a></li>
                        @endforeach
                  </ul>
                  <a href="{{ action('JugadorController@getJugadores') }}" class="btn btn-info" role="button">Mostrar todos los jugadores</a>
            </div>
            {{ $jugadores->links() }}
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
      </div>
</div>
@endsection
