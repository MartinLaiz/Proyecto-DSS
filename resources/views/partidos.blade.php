@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))
<div class="contenedor row">
      @include('tabla',array('values' => $values, 'lista' => $lista))
</div>
@endsection
