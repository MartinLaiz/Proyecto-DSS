@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'partidos'))
<div class="contenedor row">
      @include('tablaAccion',array('values' => $values, 'lista' => $lista))
</div>
@endsection
