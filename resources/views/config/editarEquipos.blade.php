@extends('layouts.master')
@section('title', 'Equipos')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h2>Todos los equipos</h2>
            <div class="">
                  {{-- $lista->links() --}}
                  <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                              <tr>
                                    <th>CIF</th>
                                    <th>Nombre</th>
                                    <th>Presupuesto</th>
                                    <th>Estadio</th>
                                    <th>Capacidad</th>
                                    <th>Patrocinador</th>
                                    <th class="text-center">Acciones</th>
                              </tr>
                        </thead>
                        <tbody>
                        @foreach($lista as $team)
                              <tr>
                                    <td>{!!$team->cif!!}</td>
                                    <td><a href="{{ action('EquipoController@getEquipo',$team->id) }}">{!!$team->nombreEquipo!!}</a></td>
                                    @if ($team->cif == 'A27417476')
                                          <td>{!!$team->presupuesto!!}</td>
                                    @else
                                          <td></td>
                                    @endif
                                    <td>{!!$team->estadio->nombre!!}</td>
                                    <td>{!!$team->estadio->capacidad!!}</td>
                                    <td>{!!$team->patrocinador->nombre!!}</td>
                                    <td>
                                          <div class="btn-group ">
                                                <a {{-- href="{{ action('EquipoController@modificarEquipo', $team->id) }}" --}}
                                                      class="btn btn-warning btn-block btn-sm  glyphicon glyphicon-pencil" 
                                                      role="button" title="Modificar">
                                                </a>
                                                <a  href="{{ action('EquipoController@eliminar', $team->id) }}"  
                                                      class="btn btn-danger btn-block glyphicon glyphicon-trash" 
                                                      role="button" title="Borrar">
                                                </a>
                                          </div>
                                    </td>
                              </tr>
                              @endforeach
                        </tbody>
                  </table>
            </div>
      </div>
</div>
@endsection
