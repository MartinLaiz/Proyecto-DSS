@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="col-md-4 col-md-offset-4">
            <div class="row">
                  <div class="col-md-5">
                        DNI:
                  </div>
                  <div class="col-md-7">
                        {{ $jugador->dni }}
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-5">
                        Nombre:
                  </div>
                  <div class="col-md-7">
                        {{ $jugador->nombre }}
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-5">
                        Apellidos:
                  </div>
                  <div class="col-md-7">
                        {{ $jugador->apellidos }}
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-5">
                        Fecha de nacimiento:
                  </div>
                  <div class="col-md-7">
                        {{ $jugador->fNac }}
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-5">
                        Posición:
                  </div>
                  <div class="col-md-7">
                        @if($jugador->posicion == 'Delantero')
                              Delantero
                        @elseif($jugador->posicion == 'Medio')
                              Medio
                        @elseif($jugador->posicion == 'Defensa')
                              Defensa
                        @elseif($jugador->posicion == 'Portero')
                              Portero
                        @else
                              No asignado</h4>
                        @endif
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-5">
                        Cargo:
                  </div>
                  <div class="col-md-7">
                        @if($jugador->cargo == '1')
                              Primer capitán
                        @elseif($jugador->cargo == '2')
                              Segundo capitán
                        @elseif($jugador->posicion == '3')
                              Tercer capitán
                        @else
                              Sin cargo
                        @endif
                  </div>
            </div>
      </div>
</div>
@endsection
