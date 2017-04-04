@extends('layouts.master')
@section('title', 'Crear jugador')
@section('content')
@include('cabecera',array('section'=>'Inicio'))


<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">

      {{-- Muestra errores --}}
            @if (count($errors) > 0)
                  <ul>
                  @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                              <a href="#" class="alert-link">{{ $error }}</a>
                        </div>
                  @endforeach
                  </ul>
            @endif
          <form action="{{action('PartidoController@crearPartido')}}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}  
                  @include('formularioPartido',array('listaEquipos'=> $listaEquipos))
        </form> 
      </div>
</div>
@endsection
