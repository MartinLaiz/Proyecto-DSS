@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'configuracion'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <br>
            <div class="row">
                  <div class="col-md-4 text-center">
                        <h3>Jugadores</h3>
                        <br>
                        <a class="btn btn-primary" href="{{ action('JugadorController@formulario') }}" role="button">Insertar jugador</a><br><br>
                        <a class="btn btn-primary" href="{{ action('JugadorController@formulario') }}" role="button">Modificar/Borrar jugador</a>
                        <br>
                  </div>
                  <div class="col-md-4 text-center">
                        <h3>Equipo</h3>
                        <br>
                        <a class="btn btn-primary" href="{{ action('JugadorController@formulario') }}" role="button">Insertar equipo</a><br><br>
                        <a class="btn btn-primary" href="{{ action('JugadorController@formulario') }}" role="button">Modificar/Borrar equipo</a>
                        <br>
                  </div>
                  <div class="col-md-4 text-center">
                        <h3>Partido</h3>
                        <br>
                        <a class="btn btn-primary" href="{{ action('JugadorController@formulario') }}" role="button">Insertar partido</a><br><br>
                        <a class="btn btn-primary" href="{{ action('JugadorController@formulario') }}" role="button">Modificar/Borrar partido</a>
                        <br>
                  </div>
            </div>
      </div>
</div>
@endsection
