@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <div class="">
                  <h3>Jugadores</h3>
                  <br>
                  <button class="btn btn-primary" type="button" name="button">Insertar jugador</button>
                  <button class="btn btn-primary" type="button" name="button">Modificar jugador</button>
                  <br>
            </div>
      </div>
</div>
@endsection
