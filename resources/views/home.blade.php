@extends('layouts.master')
@section('title', 'Inicio')
@section('content')

<div class="contenedor row">
      @include('cabecera',array('section'=>'inicio'))
      <div class="col-lg-offset-1 col-lg-5 col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
            <h3>Último partido</h3>
            <div class="well row">
                  <div class="col-md-6">
                        <div class="">
                              <img src="" alt="Logo equipo local" width="50px">
                        </div>
                        <br>
                        <div class="">
                              {{ dd($ultimoPartido) }}
                        </div>
                  </div>
                  <div class="col-md-6 text-right">
                        <div class="">
                              <img src="" alt="Logo equipo visitante" width="50px">
                        </div>
                        <br>
                        <div class="">

                        </div>
                  </div>
            </div>
      </div>
      <div class="col-lg-5 col-md-4 col-xs-10 col-xs-offset-1 col-lg-offset-0">
            <div>
                  <h3>Últimos partidos</h3>
                  <ul class="list-group">
                        @foreach($ultPartidos as $partido)
                        <li class="list-group-item row">
                              <div class="col-lg-2 col-md-12 col-sm-2 text-center">
                                    {{ date("d/m/Y",strtotime($partido->fecha)) }}
                              </div>
                              <div class="col-lg-4 col-md-12 col-sm-4 text-center">
                                    {{ $partido->equipoLocal->nombreEquipo }}
                              </div>
                              <div class="col-lg-2 col-md-12 col-sm-2 text-center">
                                    {{ $partido->golesLocal }} - {{ $partido->golesVisitante }}
                              </div>
                              <div class="col-lg-4 col-md-12 col-sm-4 text-center">
                                    {{ $partido->equipoVisitante->nombreEquipo }}
                              </div>
                        </li>
                        @endforeach
                  </ul>
            </div>
            <div>
                  <h3>Próximos partidos</h3>
                  <ul class="list-group">
                        @foreach($proxPartidos as $partido)
                        <li class="list-group-item row">
                              <div class="col-lg-2 col-md-12 col-sm-2 text-center">
                                    {{ date("d/m/Y",strtotime($partido->fecha)) }}
                              </div>
                              <div class="col-lg-4 col-md-12 col-sm-4 text-center">
                                    {{ $partido->equipoLocal->nombreEquipo }}
                              </div>
                              <div class="col-lg-2 col-md-12 col-sm-2 text-center">
                                    -
                              </div>
                              <div class="col-lg-4 col-md-12 col-sm-4 text-center">
                                    {{ $partido->equipoVisitante->nombreEquipo }}
                              </div>
                        </li>
                        @endforeach
                  </ul>
            </div>
      </div>
</div>

@endsection
