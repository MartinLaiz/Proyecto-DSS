@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
      @include('tabla',array('values' => $values, 'lista' => $lista))
      </div>
</div>
@endsection
