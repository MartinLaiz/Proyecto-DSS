@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
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
                                <th>CIF</th>
                                <th>Nombre</th>
                                <th>Presupuesto</th>
                                <th>Estadio</th>
                                <th>Capacidad</th>
                        </tr>
                  </thead>
                  <tbody>
                   @foreach($lista as $team)
                    <tr>
                            <td>{!!$team->cif!!}</td>
                            <td><a href="{{ action('EquipoController@getEquipo',$team->equipoid) }}">{!!$team->nombreEquipo!!}</a></td>
                            <td>{!!$team->presupuesto!!}</td>
                            <td>{!!$team->nombre!!}</td>
                            <td>{!!$team->capacidad!!}</td>
                    </tr>
                    @endforeach;
                  </tbody>
            </table>
       </div>
 </div>
 @endsection>

