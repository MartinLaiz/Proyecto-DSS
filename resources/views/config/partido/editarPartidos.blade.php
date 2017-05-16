@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))

<div class="contenedor row">
      @include('config/configuracion')
      <div class="col-md-10 col-md-offset-1">
            <h2>Partidos</h2>
            {{ $partidos->links() }}
            <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                  <thead>
                        <tr>
                              <th>Partido</th>
                              <th>Equipo Local</th>
                              <th>Equipo Visitante</th>
                              <th>Estadio</th>
                              <th>Goles Local</th>
                              <th>Goles Visitante</th>
                              <th>Competicion</th>
                              <th>Temporada</th>
                              <th>Acciones</th>
                        </tr>
                  <tbody>
                  
                  @foreach($partidos as $partido)
                        @if($partido->temporada != null && $partido->competicion != null)
                        <tr>

                              <td><a href="{{ action('ParticiparController@verParticipar', $partido->id)}}">{!!$partido->id!!}</a></td>
                              <th>{!!$partido->equipoLocal->nombreEquipo!!}</th>
                              <th>{!!$partido->equipoVisitante->nombreEquipo!!}</th>
                              <th>{!!$partido->estadio->nombre!!}</th>
                              <th>{!!$partido->golesLocal!!}</th>
                              <th>{!!$partido->golesVisitante!!}</th>
                              <th>{!!$partido->competicion->nombre!!}</th>
                              <th>{!!$partido->temporada->nombre!!}</th>
                              <td>
                                    <div class="btn-group ">
                                          <a href="{{ action('PartidoController@formularioModificar', $partido->id)}}" 
                                                class="btn btn-warning btn-block btn-sm  glyphicon glyphicon-pencil" 
                                                role="button" title="Modificar">
                                          </a>
                                          <a href="{{ action('PartidoController@eliminarPartido', $partido->id) }}" 
                                                class="btn btn-danger btn-block glyphicon glyphicon-trash" 
                                                role="button" title="Borrar">
                                          </a>
                                    </div>
                              </td>
                              
                        </tr>
                        @endif
                    @endforeach
                  </tbody>
            </table>
       </div>
 </div>
@endsection
