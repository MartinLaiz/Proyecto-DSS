{{ dd($equipos) }}
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
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example<span class="caret"></span></button>
                  <ul class="dropdown-menu">
                        @foreach($equipos as $equipo)
                              <li><a href="{{ action('JugadorController@getJugadoresEquipo',[$equipo->id]) }}">{{ $equipo->nombreEquipo }}</a></li>
                        @endforeach
                  </ul>
            </div>
            @include('tabla',array('values' => $values, 'lista' => $lista))
      </div>
</div>
@endsection
