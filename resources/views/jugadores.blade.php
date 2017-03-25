@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'Inicio'))
<div class="contenedor">
      @include('tabla',array('values' => $values, 'lista' => $lista))
</div>
@endsection
