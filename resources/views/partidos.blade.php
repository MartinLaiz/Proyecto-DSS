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
                                <th>Goles Local</th>
                                <th>Goles Visitante</th>
                                <th>Competicion</th>
                                <th>Temporada</th>
                       
                        </tr>

                  <tbody>
                  
                   @foreach($jugar as $j)
                    <tr>
                        @foreach($partidos as $partido)
                              @if($j->partido_id == $partido->id)
                                    <td>{!!$partido->equipoLocal->nombreEquipo!!}</td>
                                    <td>{!!$partido->equipoVisitante->nombreEquipo!!}</td>
                                    <td>{!!$j->golesLocal!!}</td>
                                    <td>{!!$j->golesVisitante!!}</td>

                              @endif
                        @endforeach

                        @foreach($competiciones as $competicion)
                              @if($j->competicion_id == $competicion->id)
                                    <td>{!!$competicion->nombre!!}</td>
                              @endif

                        @endforeach
                          <td>{!!$temporada!!}</td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
       </div>
 </div>
@endsection
