@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))

<div class="contenedor row">
      @include('config/configuracion')
      <div class="col-md-10 col-md-offset-1">
            <h2>Partidos</h2>
            {{ $partidos->links() }}
            <table class="table table-striped table-hover table-responsive" cellspacing="0" width="100%">
                  <thead>
                        <tr>
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
                  <tr onclick="window.location.href = '{{ action('ParticiparController@verParticipar', $partido->id)}}';">

                        <td>{!!$partido->equipoLocal->nombreEquipo!!}</th>
                        <td>{!!$partido->equipoVisitante->nombreEquipo!!}</th>
                        <td>{!!$partido->estadio->nombre!!}</th>
                        <td>{!!$partido->golesLocal!!}</th>
                        <td>{!!$partido->golesVisitante!!}</th>
                        <td>{!!$partido->competicion->nombre!!}</th>
                        <td>{!!$partido->temporada->nombre!!}</th>
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
                        
                    </t>
                    @endforeach
                  </tbody>
            </table>
       </div>
 </div>
@endsection
