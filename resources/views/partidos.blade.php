@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h2>Partidos</h2>
            <!--Parte del filtro-->
            <div class="row">
                  <form action="{{ action('PartidoController@getPartidos') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="form-group row">
                              <div class="col-lg-3 col-md-4 col-sm-4">
                                    <select class="form-control" onchange="mostrarOcultarEquipo2()" name="equipo1" id="equipo1">
                                          <option value="Todos">Todos los equipos</option>
                                          @foreach($equipos as $unEquipo)
                                          <option value="{{ $unEquipo->id }}" @if($unEquipo->id == $equipo1) selected @endif>
                                          {{ $unEquipo->nombreEquipo }}</option>
                                          @endforeach
                                    </select>
                              </div>
                              <div class="col-lg-1 col-md-4 col-sm-4 text-center"><img src="{{ asset('images/Vs.png')}}" alt="Versus" width="30px"></div>
                              <div class="col-lg-3 col-md-4 col-sm-4">
                                    <select class="form-control" name="equipo2" id="equipo2">
                                          <option value="Todos">Todos los equipos</option>
                                          @foreach($equipos as $unEquipo)
                                          <option value="{{ $unEquipo->id }}" @if($unEquipo->id == $equipo2) selected @endif>
                                          {{ $unEquipo->nombreEquipo }}</option>
                                          @endforeach
                                    </select>
                              </div>
                              <div class="col-lg-3 col-md-4 col-sm-4">
                                    <select class="form-control" name="temporada" id="temporada">
                                          <option value="Todas">Todas las temporadas</option>
                                          @foreach($temporadas as $unaTemporada)
                                          <option value="{{ $unaTemporada->id }}" @if($unaTemporada->id == $temporada) selected @endif>
                                          Temporada {{ $unaTemporada->nombre }}</option>
                                          @endforeach
                                    </select>
                              </div>
                              <div class="col-lg-3 col-md-4 col-sm-4">
                                    <select class="form-control" name="competicion" id="competicion">
                                          <option value="Todas">Cualquier competición</option>
                                          @foreach($competiciones as $unaCompeticion)
                                          <option value="{{ $unaCompeticion->id }}" @if($unaCompeticion->id == $competicion) selected @endif>
                                          {{ $unaCompeticion->nombre }}</option>
                                          @endforeach
                                    </select>
                              </div>
                        </div>
                        <div class="row col-lg-3 col-md-4 col-sm-4 text-center">
                              <button class="btn btn-success btn-block" type="submit">Establecer filtro</button>
                        </div>
                  </form>
            </div>
            {{$partidos->appends(['equipo1' => $equipo1, 'equipo2' => $equipo2,'temporada' => $temporada])->links()}}
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
                    {{--@if( ($equipo1 == $partido->equipoLocal->id && $equipo2 == $partido->equipoVisitante->id) ||
                         ($equipo2 == $partido->equipoLocal->id && $equipo1 == $partido->equipoVisitante->id) )
                        <th>{!!$partido->equipoLocal->nombreEquipo!!}</th>
                        <th>{!!$partido->equipoVisitante->nombreEquipo!!}</th>
                        <th>{!!$partido->estadio->nombre!!}</th>
                        <th>{!!$partido->golesLocal!!}</th>
                        <th>{!!$partido->golesVisitante!!}</th>
                        <th>{!!$partido->competicion->nombre!!}</th>
                        <th>{!!$partido->temporada->nombre!!}</th>
                    @elseif( $equipo2 == 'Todos' && ($equipo1 == $partido->equipoLocal->id || $equipo1 == $partido->equipoVisitante->id))
                        <th>{!!$partido->equipoLocal->nombreEquipo!!}</th>
                        <th>{!!$partido->equipoVisitante->nombreEquipo!!}</th>
                        <th>{!!$partido->estadio->nombre!!}</th>
                        <th>{!!$partido->golesLocal!!}</th>
                        <th>{!!$partido->golesVisitante!!}</th>
                        <th>{!!$partido->competicion->nombre!!}</th>
                        <th>{!!$partido->temporada->nombre!!}</th>
                    @elseif( $equipo2 == $partido->equipoLocal->id || $equipo2 == $partido->equipoVisitante->id)
                        <th>{!!$partido->equipoLocal->nombreEquipo!!}</th>
                        <th>{!!$partido->equipoVisitante->nombreEquipo!!}</th>
                        <th>{!!$partido->estadio->nombre!!}</th>
                        <th>{!!$partido->golesLocal!!}</th>
                        <th>{!!$partido->golesVisitante!!}</th>
                        <th>{!!$partido->competicion->nombre!!}</th>
                        <th>{!!$partido->temporada->nombre!!}</th>
                    @endif--}}
                    </tr>
                    @endforeach
                  </tbody>
            </table>
       </div>
 </div>
<script type="text/javascript">
      function mostrarOcultarEquipo2(){
            var equipo1 = document.getElementById('equipo1');

            var equipo2 = document.getElementById('equipo2');
            
            if(equipo1.value != 'Todos'){
                  equipo2.disabled = false;
            }
            else equipo2.disabled = true;
      }
      window.onload = mostrarOcultarEquipo2;

</script>
@endsection
