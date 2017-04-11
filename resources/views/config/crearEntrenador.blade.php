@extends('layouts.master')
@section('title', 'Crear entrenador')
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
{{------------------------------------------------}}
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h2>Crear entrenador</h2>

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
            <form action="{{action('EntrenadorController@crearEntrenador')}}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  {{--Campos: nombre, apellidos, fNac --}}
                  
                  <div class="row form-group">
                        <div class="col-md-3">
                              <input class="form-control" placeholder="DNI" type="text" name="dni" id="dni" required>
                        </div>
                        <div class="col-md-4">
                              <input class="form-control" placeholder="Nombre" type="text" name="nombre" id="nombre" required>
                        </div>
                        <div class="col-md-5">
                              <input class="form-control" placeholder="Apellidos" type="text" name="apellidos" id="apellidos" required>
                        </div>
                  </div>
                  <div class="row form-group">
                        <div class="col-md-2">
                              {{--Fecha de nacimiento--}}
                              <input class="form-control" id="fNac" name="date" placeholder="Nacido el" type="date" required/>
                        </div>
                        <!--<div class="col-md-4">
                              <input class="form-control" placeholder="Contraseña"type="password" name="contraseña" id="contrasena">
                        </div>-->
                  </div>
                  <div class="row">
                         <div class="col-md-4">
                              <style>select:invalid { color: gray; }</style>
                              <select class="form-control" id="equipo" placeholder="equipoVisitante" name="equipo" required>
                                    <option value="Equipo" disabled selected hidden>Equipo </option>
                                    @foreach($listaEquipos as $equipo)
                                          <option value="{{ $equipo->id }}"> {{ $equipo->nombreEquipo }}</option>
                                    @endforeach
                              </select>
                        </div> 

                        <div class="col-md-4">
                              <button class="btn btn-success btn-block" type="submit">Crear entrenador</button>
                        </div>
                  </div>
            </form>
      </div>
</div>
@endsection
