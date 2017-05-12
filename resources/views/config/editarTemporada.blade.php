@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))

<div class="contenedor row">
      @include('config/configuracion')
      <div class="col-md-6 col-md-offset-3">
            <h2>Temporadas</h2>
            <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                  <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Inicio</th>
                            <th>Fin</th>
                            <th>Borrar</th>

                        </tr>
                  <tbody>
                  
                  @foreach($temporadas as $temporada)
                  <tr>
                        <th>{!!$temporada->nombre!!}</th>
                        <th>{!!$temporada->inicio!!}</th>
                        <th>{!!$temporada->fin!!}</th>
			            <th><a title="Eliminar Temporada" href="{{ action('TemporadaController@eliminarTemporada', $temporada->id)}}"  data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></th>
                           
                        
                    </tr>
                    @endforeach
                  </tbody>
            </table>
       </div>
 </div>
@endsection