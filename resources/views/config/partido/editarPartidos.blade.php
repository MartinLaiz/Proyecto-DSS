@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))

<div class="contenedor row">
      @include('config/configuracion')
      <div class="col-md-10 col-md-offset-1">
            <h2>Partidos</h2>
             <div class="hidden-xs">{{ $partidos->links() }}</div>
            <table class="table table-striped table-hover table-responsive" cellspacing="0" width="100%">
                  <thead>
                        <tr>
                              <th class="hidden-xs">Equipo Local</th>
                              <th class="hidden-xs">Goles Local</th>
                              <th class="visible-xs">Local</th>
                              <th class="visible-xs">Resultado</th>
                              <th class="visible-xs">Visitante</th>
                              <th class="hidden-xs">Goles Visitante</th>
                              <th class="hidden-xs">Equipo Visitante</th>
                              <th>Estadio</th>
                              <th class="hidden-xs">Competicion</th>
                              <th class="hidden-xs">Temporada</th>
                              <th>Acciones</th>
                        </tr>
                  <tbody>
                  
                  @foreach($partidos as $partido)
                  <tr onclick="window.location.href = '{{ action('ParticiparController@verParticipar', $partido->id)}}';">
                        @if($partido->temporada != null && $partido->competicion != null)

                              <th>{!!$partido->equipoLocal->nombreEquipo!!}</th>
                              <th class="hidden-xs">{!!$partido->golesLocal!!}</th>
                              <th class="hidden-xs">{!!$partido->golesVisitante!!}</th>
                              <th class="visible-xs">{!!$partido->golesLocal!!} - {!!$partido->golesVisitante!!}</th>
                              <th>{!!$partido->equipoVisitante->nombreEquipo!!}</th>
                              <th>{!!$partido->estadio->nombre!!}</th>
                              <th class="hidden-xs">{!!$partido->competicion->nombre!!}</th>
                              <th class="hidden-xs">{!!$partido->temporada->nombre!!}</th>
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
            {{ $partidos->links() }}
       </div>
 </div>
@endsection
