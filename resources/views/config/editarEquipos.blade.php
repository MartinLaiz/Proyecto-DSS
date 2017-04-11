@extends('layouts.master')
@section('title', 'Equipos')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h2>Todos los equipos</h2>
            <div class="">
                  {{ $lista->links() }}
                  <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                              <tr>
                                    @foreach($values as $key => $v)
                                    <th>{{ $v }}</th>
                                    @endforeach
                                    <th class="text-center">Acciones</th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach($lista as $elemento)
                              <tr>
                                    @foreach($values as $key => $v)
                                    <td>{!!$elemento[$key]!!}</td>
                                    @endforeach
                                    <td>
                                          <div class="btn-group ">
                                                <a href="{{ action('EquipoController@modificarEquipo', $elemento->id) }}" 
                                                      class="btn btn-warning btn-block btn-sm  glyphicon glyphicon-pencil" 
                                                      role="button" title="Modificar">
                                                </a>
                                                <a href="{{ action('EquipoController@eliminar', $elemento->id) }}" 
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
