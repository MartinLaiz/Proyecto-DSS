@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'partidos'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            {{ $lista->links() }}
            <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                  <thead>
                        <tr>
                              @foreach($values as $key => $v)
                              @if($v == 'Fecha')
                              <th class="text-center">{{ $v }}</th>
                              @elseif($v == 'Equipo Visitante')
                              <th class="text-right">{{ $v }}</th>
                              @else
                              <th>{{ $v }}</th>
                              @endif
                              @endforeach
                              <th class="text-center">Acciones</th>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach($lista as $elemento)
                        <tr>
                              @foreach($values as $key => $v)
                              @if($v=='Goles Local' or $v=='Goles Visitante' or $v=='Fecha')
                              <td class="text-center">{!!$elemento[$key]!!}</td>
                              @elseif($v == 'Equipo Visitante')
                              <td class="text-right">{!!$elemento[$key]!!}</th>
                              @else
                              <td>{!!$elemento[$key]!!}</td>
                              @endif
                              @endforeach
                              <td>
                                    <form action="{{ action('PartidoController@EliminarPartido', [$elemento->id]) }}"> 
                                          {{ csrf_field() }} 
                                          <button type="submit" class="btn btn-danger">Borrar</button> 
                                    </form> 

                                    <form action="{{ action('PartidoController@formularioModificar', [$elemento->id]) }}" method="POST"> 
                                          {{ csrf_field() }} 
                                          <button  type="submit" class="btn btn-warning">Modificar</button> 
                                    </form> 
                              </td> 
                              
                        </tr>
                        @endforeach
                  </tbody>
            </table>
       </div>
 </div>
 @endsection>
