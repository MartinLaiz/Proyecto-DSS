@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'equipo'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <div class="row">
                  <div class="col-md-6">
                        <h3>Equipo:</h3>
                        <div class="row">
                              <label class="col-md-6 lb-md">CIF:</label>
                              {{ $equipo->cif }}
                        </div>
                        <div class="row">
                              <label class="col-md-6 lb-md">Nombre:</label>
                              {{ $equipo->nombreEquipo }}
                        </div>
                        <div class="row">
                              <label class="col-md-6 lb-md">Presupuesto:</label>
                              {{ $equipo->presupuesto }}
                        </div>
                  </div>
                  <div class="col-md-6">
                        <h3>Estadio:</h3>
                        <div class="row">
                              <div class="col-md-6">
                                    <label class="col-md-6 lb-md">Nombre:</label>
                                    {{ $estadio->nombre }}
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-md-6">
                                    <label class="col-md-6 lb-md">Aforo:</label>
                                    {{ $estadio->capacidad }}
                              </div>
                        </div>
                  </div>
            </div>
            <br>
      </div>
</div>
@endsection
