@extends('layouts.master')
@section('title', 'Inicio')
@section('content')

   <!-- SI quitas esto se va el error <div class="contenedor">
      {{$lista = action('JugadorController@getJugadores')}}
      @include('tabla',array('values' => array('nombre'=>'Nombre','apellidos'=>'Apellidos','fNac'=>'Fecha de Nacimiento','posicion'=>'Posición','dorsal'=>'Dorsal'),'lista' => $lista))
        </div>-->


 <div class="container">
    <div class="row">
        <div class="col-md-9">
            @include('cabecera',array('section'=>'Inicio'))
    <div class="row">

        
    <div class="col-md-6" style='padding-top:120px  ' ;>
        <table class="table   ">
            <caption><p class="text-muted">Último partido</p></caption>
            <thead>
                <tr class="bg-warning">
                    <th><a href="#" class="text-primary">Equipo Local</a></th>
                    <th><a href="#" class="text-primary">Equipo Visitante</a></th>
                </tr>
            </thead>
                    
            <tbody>
                <tr class="bg-warning">
                     <td>Alineación</td>
                     <td>Alineación</td>
                </tr>

                <tr class="bg-warning">
                    <td>Banquillo</td>
                    <td>Banquillo</td>
                </tr>
                <tr class="bg-warning">
                    <td>Cambios</td>
                    <td>Cambios</td>
                </tr>
                <tr class="bg-warning">
                    <td>Goles</td>
                    <td>Goles</td>
                </tr>
                <tr class="bg-warning">
                     <td>Observaciones</td>
                    <td>Observaciones</td>
                </tr>
                <tr class="bg-warning">
                    <td>Resultado: <td>
                </tr>
            </tbody>
        </table>
    </div>

     <div class='col-sm-6' style='padding-top:120px  ' >
        <caption><p class="text-muted">Partido recientes en Liga</p></caption>
    </div>
</div>


@endsection


    