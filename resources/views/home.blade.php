@extends('layouts.master')
@section('title', 'Inicio')
@section('content')

<div class="contenedor row">
      @include('cabecera',array('section'=>'inicio'))
      <div class="col-lg-offset-1 col-lg-5 col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
            <h3>Último partido</h3>
           <div class="well row">
                  <div class="col-md-6">
                        <div class="row">
                              <div class="col-md-3">
                                    <img src="{{ $ultimoPartido->equipoLocal->logo }}" alt="Logo equipo local" width="50px">
                              </div>
                              <div class="col-md-3">
                                     <h3>{{ $ultimoPartido->golesLocal }}</h3>
                              </div>
                        </div>
                        <br>
                        <div class="">
                              {{ $ultimoPartido->equipoLocal->nombreEquipo }}

                              <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                          <th class="text-left" >Once Inicial</th>
                                    </tr>
                                          <tbody> 
                                          @foreach($titulares as $titular)
                                          <tr> 
                                          @if($titular->local == "si") 
                                                <td class="text-left" > {!!$titular->usuario->nombre!!} </td> 

                                          @endif 
                                          </tr> 
                                          @endforeach
                                    </tbody> 
                              </table>

                                  <table class="table"> 
                                    <thead> 
                                          <tr> 
                                                <th class="text-left"> Banquillo</th> 
                                          </tr> 
                                    </thead> 
                                    <tbody> 
                                          @foreach($banquillo as $b)
                                          <tr> 
                                                @if($b->local == "si") 
                                                      <td class="text-left"> {!!$b->usuario->nombre!!} </tf> 
                                                
                                                @endif 
                                          </tr> 
                                          @endforeach
                                    </tbody> 
                              </table>

                        </div>
                  </div>
                  <div class="col-md-6 text-right">
                        <div class="row">
                              <div class="col-md-offset-6 col-md-3">
                                     <h3>{{ $ultimoPartido->golesVisitante }}</h3>
                              </div>
                              <div class="col-md-3">
                                    <img src="{{ $ultimoPartido->equipoVisitante->logo }}" alt="Logo equipo local" width="50px">
                              </div>
                        </div>
                        <br>
                        <div class="text-right">
                              {{ $ultimoPartido->equipoVisitante->nombreEquipo }}
                              <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                          <th class="text-right" >Once Inicial</th>
                                    </tr>
                                          <tbody> 
                                          @foreach($titulares as $titular)
                                          <tr> 
                                          @if($titular->local == "no") 
                                                <td class="text-right" > {!!$titular->usuario->nombre!!} </td> 

                                          @endif 
                                          </tr> 
                                          @endforeach
                                    </tbody>
                                    
                              </table>

                                <table class="table"> 
                                    <thead> 
                                          <tr> 
                                                <th class="text-right"> Banquillo</th> 
                                          </tr> 
                                    </thead> 
                                    <tbody> 
                                          @foreach($banquillo as $b)
                                          <tr> 
                                                @if($b->local == "no") 
                                                      <td class="text-right"> {!!$b->usuario->nombre!!} </tf> 
                                                
                                                @endif 
                                          </tr> 
                                          @endforeach
                                    </tbody> 
                              </table>
                          

                        </div>

                        
                  </div>
                  @if(count($titulares) == 0 &&count($banquillo) == 0  )
                        <div class="text-center">
                              No hay datos disponibles
                        </div>
                  @endif
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
