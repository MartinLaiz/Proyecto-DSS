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
                        @foreach($equipos as $equipo)
                        <li><a href="{{ action('JugadorController@editarJugadoresEquipo',[$equipo->id]) }}">{{ $equipo->nombreEquipo }}</a></li>
                        @endforeach
                  </ul>
                  <a href="{{ action('JugadorController@editar') }}" class="btn btn-info" role="button">Mostrar todos los jugadores</a>
            </div>
            <div class="">
                  {{ $lista->links() }}
                  <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                              <tr>
                                    @foreach($values as $key => $v)
                                    <th>{{ $v }}</th>
                                    @endforeach
                                    <th class="text-center">Acciones</th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach($lista as $elemento)
                              <tr>
                                    @foreach($values as $key => $v)
                                    <td>{!!$elemento[$key]!!}</td>
                                    @endforeach
                                    <td>
                                          <div class="btn-group ">
                                                <a href="{{ action('JugadorController@editarJugador', $elemento->id) }}" 
                                                      class="btn btn-warning btn-block btn-sm  glyphicon glyphicon-pencil" 
                                                      role="button" title="Modificar">
                                                </a>
                                                <a href="{{ action('JugadorController@eliminar', $elemento->id) }}" 
                                                      class="btn btn-danger btn-block glyphicon glyphicon-trash" 
                                                      role="button" title="Borrar">
                                                </a>
                                          </div>
                                    </td>

                              </tr>
                              @endforeach
                        </tbody>
                  </table>
            </div>
      </div>
</div>
@endsection
