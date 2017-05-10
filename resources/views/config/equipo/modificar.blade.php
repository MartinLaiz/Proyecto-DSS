@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      @include('config/configuracion')
      <div class="col-md-10 col-md-offset-1">
       {{-- Muestra errores --}}
            @if (count($errors) > 0)
                  <ul>
                  @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                              <a href="#" class="alert-link">{{ $error }}</a>
                        </div>
                  @endforeach
                  </ul>
            @endif
            <h3>Modificar equipo</h3>
            <form class="form-horizontal" action="{{ action('EquipoController@modificarEquipoPost',[$equipo->id]) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('POST') }}
                  <div class="col-md-6">
                        <h2>Equipo</h2>
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="CIF">CIF:</label>
                              <div class="col-sm-10">
                                    <input class="form-control" type="text" name="cif" id="cif" value="{{ $equipo->cif }}" required>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="Nombre">Nombre:</label>
                              <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nombreEquipo" id="nombreEquipo" value="{{ $equipo->nombreEquipo }}" required>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-3 control-label" for="Presupuesto">Presupuesto:</label>
                              <div class="col-sm-9">
                                    <input class="form-control" type="number" min="0" name="presupuesto" id="presupuesto" value="{{ $equipo->presupuesto }}" required>
                              </div>
                        </div>
                  </div>
                  <div class="col-md-6">
                        <h2>Estadio</h2>
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="Nombre">Nombre:</label>
                              <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $estadio->nombre }}" required>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 control-label" for="Capacidad">Capacidad:</label>
                              <div class="col-sm-10">
                                    <input class="form-control" type="number" min="0" name="capacidad" id="capacidad" value="{{ $estadio->capacidad }}" required>
                              </div>
                        </div>
                        <button type="submit" class="btn btn-success" name="button">Modificar</button>
                  </div>
            </form>
      </div>
</div>
@endsection
