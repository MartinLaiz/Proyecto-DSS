@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'Inicio'))
<div class="contenedor">
      {{$lista = action('JugadorController@getJugadores')}}
      @include('tabla',array('values' => array('nombre'=>'Nombre','apellidos'=>'Apellidos','fNac'=>'Fecha de Nacimiento','posicion'=>'Posición','dorsal'=>'Dorsal'),'lista' => $lista))
</div>
@endsection
