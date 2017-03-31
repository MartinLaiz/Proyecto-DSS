@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'Inicio'))
<div class="contenedor row">

    <form action="{{action('JugadorController@formulario')}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    {{--Campos: nombre, apellidos, fNac, posicion, dorsal --}}
    
    <input class="form-control" placeholder="Nombre"    type="text"      name="Nombre"      id="nombre">
    <input class="form-control" placeholder="Apellidos" type="text"      name="Apellidos"   id="apellidos">
{{--<input class="form-control" placeholder="Contraseña"type="password"  name="Contraseña"  id="contrasena">--}}
    <input class="form-control" placeholder="Nacido el" type="text"      name="Nacido el"   id="fNac">
    <input class="form-control" placeholder="Posición"  type="text"      name="Posición"    id="posicion">
    <input class="form-control" placeholder="Dorsal"    type="number"    name="Dorsal"      id="dorsal">
    </form>

</div>
@endsection