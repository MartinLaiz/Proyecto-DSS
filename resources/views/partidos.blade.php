@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h2>Partidos <a href="#filtros" class="btn btn-info" data-toggle="collapse">Filtrar</a></h2>
            <!--Parte del filtro-->
            <div class="row collapse" id="filtros">
                  <form action="{{ action('PartidoController@getPartidos') }}" method="POST" name="filtro">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="form-group row">
                              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                    <select class="form-control" onchange="mostrarOcultarEquipo2()" name="equipo1" id="equipo1">
                                          <option value="Todos">Equipos: Todos</option>
                                          @foreach($equipos as $unEquipo)
                                          <option value="{{ $unEquipo->id }}" @if($unEquipo->id == $equipo1) selected @endif>
                                          {{ $unEquipo->nombreEquipo }}</option>
                                          @endforeach
                                    </select>
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs text-center"><img src="{{ asset('images/Vs.png')}}" alt="Versus" width="30px"></div>
                              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                    <select class="form-control" name="equipo2" id="equipo2">
                                          <option value="Todos">Equipos: Todos</option>
                                          @foreach($equipos as $unEquipo)
                                          <option value="{{ $unEquipo->id }}" @if($unEquipo->id == $equipo2) selected @endif>
                                          {{ $unEquipo->nombreEquipo }}</option>
                                          @endforeach
                                    </select>
                              </div>
                        </div>
                        <div class="form-group row">
                              <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6">
                                    <select class="form-control" name="temporada" id="temporada">
                                          <option value="Todas">Temporadas: Todas</option>
                                          @foreach($temporadas as $unaTemporada)
                                          <option value="{{ $unaTemporada->id }}" @if($unaTemporada->id == $temporada) selected @endif>
                                          Temporada {{ $unaTemporada->nombre }}</option>
                                          @endforeach
                                    </select>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6">
                                    <select class="form-control" name="competicion" id="competicion">
                                          <option value="Todas">Competición: Todas</option>
                                          @foreach($competiciones as $unaCompeticion)
                                          <option value="{{ $unaCompeticion->id }}" @if($unaCompeticion->id == $competicion) selected @endif>
                                          {{ $unaCompeticion->nombre }}</option>
                                          @endforeach
                                    </select>
                              </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 text-center" style="display: none">
                                          <input class="form-control" type="number" name="results" id="results">
                                    </div>
                              <div class="col-lg-3 col-md-4 col-sm-2 text-center">
                                    <button class="btn btn-success btn-block" type="submit">Filtrar</button>
                              </div>
                        </div>
                  </form>
            </div>
            {{$partidos->appends(['equipo1' => $equipo1, 'equipo2' => $equipo2,'temporada' => $temporada,'competicion' => $competicion,'results'=>$results])->links()}}
            @if($partidos->count() > 0)
            <div class="row">
                  <div>
                        <select class="form-control" name="resultsNumber" id="resultsNumber" onchange="cambiarPaginacion()">
                              <option value=5 @if($results == 5) selected @endif>5 resultados por página</option>
                              <option value=10 @if($results == 10) selected @endif>10 resultados por página</option>
                              <option value=15 @if($results == 15) selected @endif>15 resultados por página</option>
                              <option value=30 @if($results == 30) selected @endif>30 resultados por página</option>
                              <option value=50 @if($results == 50) selected @endif>50 resultados por página</option>
                        </select>
                  </div>
            </div>
            <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                  <thead>
                        <tr>
                              <th class="visible-xs">Local</th>
                              <th class="hidden-xs">Equipo Local</th>
                              <th class="visible-xs">Visitante</th>
                              <th class="hidden-xs">Equipo Visitante</th>
                              <th>Estadio</th>
                              <th class="hidden-xs">Goles Local</th>
                              <th class="hidden-xs">Goles Visitante</th>
                              <th class="visible-xs">Resultado</th>
                              <th class="hidden-xs">Competición</th>
                              <th class="hidden-xs">Temporada</th>
                               
                       
                        </tr>

                  <tbody>
                   @foreach($partidos as $partido)
                    <tr>
                        <td>{!!$partido->equipoLocal->nombreEquipo!!}</td>
                        <td>{!!$partido->equipoVisitante->nombreEquipo!!}</td>
                        <td>{!!$partido->estadio->nombre!!}</td>
                        <td class="hidden-xs text-center">{!!$partido->golesLocal!!}</td>
                        <td class="hidden-xs text-center">{!!$partido->golesVisitante!!}</td>
                        <td class="visible-xs text-center">{!!$partido->golesLocal!!} - {!!$partido->golesVisitante!!}</td>
                        <td class="hidden-xs">{!!$partido->competicion->nombre!!}</td>
                        <td class="hidden-xs">{!!$partido->temporada->nombre!!}</td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
            {{$partidos->appends(['equipo1' => $equipo1, 'equipo2' => $equipo2,'temporada' => $temporada,'competicion' => $competicion,'results'=>$results])->links()}}
            @else
            <div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>
                        No hay partidos así, prueba con otro filtro.
                        <br>
                        Sino siempre puedes <a href="javascript:restablecerFiltro()">restablecer el filtro</a>.
                  </strong>
                  <br>
                  
            </div>
            @endif
       </div>
 </div>
<script type="text/javascript">
      function mostrarOcultarEquipo2(){
            var equipo1 = document.getElementById('equipo1');

            var equipo2 = document.getElementById('equipo2');
            
            if(equipo1.value == 'Todos'){
                  equipo2.disabled = true;
                  equipo2.value = 'Todos';
            }
            else equipo2.disabled = false;
      }
      function restablecerFiltro(){
            var equipo1 = document.getElementById('equipo1');
            equipo1.value = 'Todos';
            var equipo2 = document.getElementById('equipo2');
            equipo2.value = 'Todos';
            var temporada = document.getElementById('temporada');
            temporada.value = 'Todas';
            var competicion = document.getElementById('competicion');
            competicion.value = 'Todas';
            document.filtro.submit();
      }
      function cambiarPaginacion(){
            var resultsNumber = document.getElementById('resultsNumber');
            var results = document.getElementById('results');
            results.value = resultsNumber.value;
            document.filtro.submit();
      }
      window.onload = mostrarOcultarEquipo2;

</script>
@endsection
