@extends('layouts.master')
@section('title', 'Inicio')
@section('content')

<div class="contenedor row">
      @include('cabecera',array('section'=>'inicio'))
      <div class="col-md-5"> <!-- Tabla ultimo partido -->
            <h3>Último partido</h3>
            <div class="col-md-6 col-sm-6"><!-- Equipo Local -->
                  <table class="table table-striped">
                        <thead>
                              <tr class="">
                                    <th><a href="#" class="text-primary">Equipo Local</a></th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr class="">
                                    <td>Alineación</td>
                              </tr>
                              <tr class="">
                                    <td>Banquillo</td>
                              </tr>
                              <tr class="">
                                    <td>Cambios</td>
                              </tr>
                              <tr class="">
                                    <td>Goles</td>
                              </tr>
                              <tr class="">
                                    <td>Observaciones</td>
                              </tr>
                        </tbody>
                  </table>
            </div>
            <div class="col-md-6 col-sm-6"><!-- Equipo Visitante -->
                  <table class="table table-striped text-right">
                        <thead>
                              <tr class="">
                                    <th><a href="#" class="text-primary">Equipo Visitante</a></th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr class="">
                                    <td>Alineación</td>
                              </tr>
                              <tr class="">
                                    <td>Banquillo</td>
                              </tr>
                              <tr class="">
                                    <td>Cambios</td>
                              </tr>
                              <tr class="">
                                    <td>Goles</td>
                              </tr>
                              <tr class="">
                                    <td>Observaciones</td>
                              </tr>
                        </tbody>
                  </table>
            </div>
      </div>
      <div class="col-md-7">
            <div>
                  <h3>Últimos partidos</h3>
                  <ul class="list-group">
                        @foreach($ultPartidos as $partidoAnt)
                        <li class="list-group-item">{{ $partidoAnt->equipoLocal }}  {{ $partidoAnt->golesLocal }}  -   {{ $partidoAnt->golesVisitante }} {{ $partidoAnt->equipoVisitante }}</li>
                        @endforeach
                  </ul>
            </div>
            <div>
                  <h3>Próximos partidos</h3>
                  <ul class="list-group">
                        @foreach($proxPartidos as $partidoProx)
                        <li class="list-group-item">{{ $partidoProx->equipoLocal }}  {{ $partidoProx->golesLocal }}  -   {{ $partidoProx->golesVisitante }}  {{ $partidoProx->equipoVisitante }}</li>
                        @endforeach
                  </ul>
            </div>
      </div>

</div>

@endsection
