@extends('layouts.master')
@section('title', 'Inicio')
@section('content')

<div class="contenedor row">
      @include('cabecera',array('section'=>'inicio'))
      <div class="col-md-10 col-md-offset-1">
            <div>
                  <h3>Últimos partidos</h3>
                  <ul class="list-group">
                        @foreach($ultPartidos as $partido)
                        <li class="list-group-item row">
                              <div class="col-md-2">
                                    {{ date("d/m/Y",strtotime($partido->fecha)) }}
                              </div>
                              <div class="col-md-3 text-center">
                                    {{ $partido->partido->equipoLocal->nombreEquipo }}
                              </div>
                              <div class="col-md-1 text-center">
                                    {{ $partido->golesLocal }} - {{ $partido->golesVisitante }}
                              </div>
                              <div class="col-md-3 text-center">
                                    {{ $partido->partido->equipoVisitante->nombreEquipo }}
                              </div>
                              <div class="col-md-3 text-center">
                                    {{ $partido->partido->estadio->nombre }}
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
                              <div class="col-md-2">
                                    {{ date("d/m/Y",strtotime($partido->fecha)) }}
                              </div>
                              <div class="col-md-3 text-center">
                                    {{ $partido->partido->equipoLocal->nombreEquipo }}
                              </div>
                              <div class="col-md-1 text-center">
                                    -
                              </div>
                              <div class="col-md-3 text-center">
                                    {{ $partido->partido->equipoVisitante->nombreEquipo }}
                              </div>
                              <div class="col-md-3 text-center">
                                    {{ $partido->partido->estadio->nombre }}
                              </div>
                        </li>
                        @endforeach
                  </ul>
            </div>
      </div>
</div>

@endsection
