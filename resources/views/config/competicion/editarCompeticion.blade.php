@extends('layouts.master')
@section('title', 'Configuración: Competiciones')
@section('content')
@include('cabecera',array('section'=>'partidos'))

<div class="contenedor row">
      @include('config/configuracion')
      <div class="col-md-6 col-md-offset-3">
            
            @if( $competiciones->count() == 0)
                  <div class="alert alert-info">
                        <a href="" class="alert-link">No existen competiciones.</a>
                  </div>
            @else
                  <h2>Competiciones</h2>
                  <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                              <tr>
                              <th>Nombre</th>
                              <th>Modificar</th>
                              <th>Borrar</th>

                              </tr>
                        <tbody>
                        
                        @foreach($competiciones as $competicion)
                        <tr>
                              <th>{!!$competicion->nombre!!}</th>
                              <th><a  data-toggle="modal" title="Modificar competicion" href="#editarCompeticion" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a></th>
                              <th><a title="Eliminar competicion" href="{{ action('CompeticionController@eliminarCompeticion', $competicion->id)}}"  data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></th>
                              
                              
                        </tr>
                        @endforeach
                        </tbody>
                  </table>
            @endif
       </div>
 </div>
@endsection




@if( $competiciones->count() >= 1)
      <div class="modal fade" id="editarCompeticion" data-target="#editarCompeticion">
            <div class="modal-dialog">
            
                  <div class="modal-content">
                        <div class="modal-header">
                              <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                              <h2>Modifica la competición</h2>
                              <form action = "{{ action('CompeticionController@editarCompeticion', $competicion->id)}}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('POST') }}  
                                    <div class="form-group">
                                          <label for="Username">Nombre</label>
                                          <input class="form-control"  type="text" name="nombre" id="nombre" required>
                                    </div>
                              </div>
                              <div class="modal-footer">
                                    <button class="btn btn-success btn-success" type="submit">Aceptar</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
@endif