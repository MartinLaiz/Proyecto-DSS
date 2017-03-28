@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'Perfil'))
<div class="contenedor row">
      <div class="col-md-4 rojo">
            <!-- Insertar imagen -->
            Nombre: <label for="name">{{ $user->nombre }}</label><br>
            Apellidos: <label for="surname">{{ $user->apellidos }}</label><br>
            Fecha de nacimiento: <label for="date">{{ $user->fNac }}</label><br>
            Equipo actual: <label for="team">{{ $user->equipo }}</label>
      </div>
      <div class="col-md-8 azul">
      </div>
</div>
@endsection
