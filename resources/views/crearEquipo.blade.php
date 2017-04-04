@extends('layouts.master')
@section('title', 'Crear jugador')
@section('content')
@include('cabecera',array('section'=>'Inicio'))
{{------------------------------------------------}}
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <form action="{{ action('EquipoController@crearEquipo') }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('POST') }}
                  <br><br>
                  <div class="row form-group">
                        <h3>Equipo</h3>
                        <div class="col-md-4">
                              <input class="form-control" placeholder="CIF" type="text" name="cif" id="cif" required>
                        </div>
                        <div class="col-md-3">
                              <input class="form-control" placeholder="Nombre del equipo" type="text" name="equipoNombre" id="equipoNombre" required>
                        </div>
                        <div class="col-md-5">
                              <input class="form-control" type="number" min="0" placeholder="Presupuesto" name="presupuesto" id="presupuesto" required>
                        </div>
                  </div>
                  <div class="row form-group">
                        <h3>Estadio</h3>
                        <div class="col-md-8 row">
                              <div class="col-md-6">
                                    <input class="form-control" placeholder="Nombre del estadio" type="text" name="estadioNombre" id="estadioNombre" required>
                              </div>
                              <div class="col-md-6">
                                    <input class="form-control" type="number" min="0" placeholder="Aforo" name="aforo" id="aforo" required>
                              </div>
                        </div>
                        <div class="col-md-4 row">
                              <button class="btn btn-success" type="submit">Crear equipo</button>
                        </div>
                  </div>
            </form>
      </div>
</div>
@endsection
