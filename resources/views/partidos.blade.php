@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h2>Partidos</h2>
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
                               
                       
                        </tr>

                  <tbody>
      
                   @foreach($partidos as $partido)
                    <tr>

                        <th>{!!$partido->equipoLocal->nombreEquipo!!}</th>
                        <th>{!!$partido->equipoVisitante->nombreEquipo!!}</th>
                        <th>{!!$partido->estadio->nombre!!}</th>
                        <th>{!!$partido->golesLocal!!}</th>
                        <th>{!!$partido->golesVisitante!!}</th>
                        <th>{!!$partido->competicion->nombre!!}</th>
                        <th>{!!$partido->temporada->nombre!!}</th>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
       </div>
 </div>
@endsection
