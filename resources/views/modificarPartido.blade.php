@extends('layouts.master')
@section('title', 'Crear jugador')
@section('content')
@include('cabecera',array('section'=>'Inicio'))

{{-----------Código para la fecha------------------}}
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/datepicker.css"/>
<script>
$(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
      };
      date_input.datepicker(options);
})
</script>

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
                 
           

          <form action="{{action('PartidoController@modificarPartido',[$idmodificar])}}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}  
                  @include('formularioPartido',array('idmodificar'=> $idmodificar,'listaEquipos'=> $listaEquipos))
        </form> 
      </div>
</div>
@endsection
