@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="col-md-6 col-md-offset-1">
            @if($equipo == 'Todos')
                  <h2>Todos los jugadores</h2>
            @else
                  <h2>Jugadores del {{ $equipo }}</h2>
            @endif
            @include('tabla',array('values' => $values, 'lista' => $lista))
      </div>
      <div class="col-md-5">

      </div>
</div>
@endsection
