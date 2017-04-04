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
                                    <div class="btn-group ">
                                          <a href="{{ action('PartidoController@EliminarPartido', [$elemento->id])}}" 
                                                class="btn btn-danger btn-block btn-sm  glyphicon glyphicon-trash" 
                                                role="button" title="Borrar" >
                                          </a>
                              
                                          <a href="{{ action('PartidoController@formularioModificar', [$elemento->id]) }}" 
                                                class="btn btn-warning btn-block btn-sm  glyphicon glyphicon-pencil" 
                                                role="button" title="Modificar" method="POST">
                                          </a>
                                    </div>
                              </td> 
                              
                        </tr>
                        @endforeach
                  </tbody>
            </table>
       </div>
 </div>
 @endsection>
