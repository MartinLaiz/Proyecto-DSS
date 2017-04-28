@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h2>Equipos</h2>
            {{-- $lista->links() --}}
            <table class="table table-striped table-responsive" cellspacing="0" width="100%">
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
                    <tr>

                        <th>{!!$partido->partido->equipoLocal->nombreEquipo!!}</th>
                        <th>{!!$partido->partido->equipoVisitante->nombreEquipo!!}</th>
                        <th>{!!$partido->partido->estadio->nombre!!}</th>
                        <th>{!!$partido->golesLocal!!}</th>
                        <th>{!!$partido->golesVisitante!!}</th>
                        <th>{!!$partido->competicion->nombre!!}</th>
                        <th>{!!$partido->temporada->nombre!!}</th>
                        <td>
                              <div class="btn-group ">
                                    <a href="" 
                                          class="btn btn-warning btn-block btn-sm  glyphicon glyphicon-pencil" 
                                          role="button" title="Modificar">
                                    </a>
                                    <a  href=""  
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
@endsection
