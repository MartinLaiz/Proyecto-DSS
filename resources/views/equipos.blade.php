@extends('layouts.master')
@section('title', 'Equipos')
@section('content')
@include('cabecera',array('section'=>'equipos'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h2>Equipos</h2>
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
                    </tr>
                    @endforeach
                  </tbody>
            </table>
       </div>
 </div>
 @endsection>

