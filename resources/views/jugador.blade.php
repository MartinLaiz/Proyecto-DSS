@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'Inicio'))
<div class="contenedor row">
      @include('tabla',array('values' => $values, 'lista' => $lista))
</div>
@endsection
