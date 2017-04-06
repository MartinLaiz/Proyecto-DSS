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
                  autoclose: true
            };
            date_input.datepicker(options);
      })
</script>
{{------------------------------------------------}}
<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <!-- Errores -->
            @if (count($errors) > 0)
            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            @foreach ($errors->all() as $message)
                  <strong>{{$message}}</strong>
                  <br>
            @endforeach
            </div>
            @endif
            <!-- Fin errores-->
            <form action="{{action('JugadorController@crearJugador')}}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('POST') }}
                  {{--Campos: nombre, apellidos, fNac, posicion, dorsal --}}
                  <br><br>
                  <div class="row form-group">
                        <div class="col-md-3">
                              <input class="form-control" placeholder="DNI" type="text" name="dni" value="{{ old('dni') }}" id="dni" required>
                        </div>
                        <div class="col-md-4">
                              <input class="form-control" placeholder="Nombre" type="text" name="nombre" value="{{ old('nombre') }}" id="nombre" required>
                        </div>
                        <div class="col-md-5">
                              <input class="form-control" placeholder="Apellidos" type="text" name="apellidos" value="{{ old('apellidos') }}" id="apellidos" required>
                        </div>
                  </div>
                  <div class="row form-group">
                        <div class="col-md-2">
                              {{--Fecha de nacimiento--}}
                              <input class="form-control" id="fNac" name="date" value="{{ old('date') }}" placeholder="Nacido el" type="date" required/>
                        </div>
                        <!--<div class="col-md-4">
                              <input class="form-control" placeholder="Contraseña"type="password" name="contraseña" id="contrasena">
                        </div>-->
                        <div class="col-md-2">
                              {{--Posición--}}
                              <style>select:invalid { color: gray; }</style>
                              <select class="form-control" id="posicion" name="posicion" value="{{ old('posicion') }}" required>
                                    <option value="Posición" disabled selected hidden>Posición</option>
                                    <option value="Delantero">Delantero</option>
                                    <option value="Mediocentro">Medio</option>
                                    <option value="Defensa">Defensa</option>
                                    <option value="Portero">Portero</option>
                              </select>
                        </div>
                        <div class="col-md-3">
                              {{--Cargo--}}
                              <style>select:invalid { color: gray; }</style>
                              <select class="form-control" id="cargo" name="cargo" value="{{ old('cargo') }}" required>
                                    <option value="0" selected>No capitan</option>
                                    <option value="1">Primer capitan</option>
                                    <option value="2">Segundo capitan</option>
                                    <option value="3">Tercer capitan</option>
                              </select>
                        </div>
                        <div class="col-md-3">
                              {{--Dorsal--}}
                              <input class="form-control" placeholder="Dorsal" type="number" name="dorsal" id="dorsal" value="{{ old('dorsal') }}" required>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-5">
                              {{--Equipo--}}
                              <style>select:invalid { color: gray; }</style>
                              <select class="form-control" id="equipo" placeholder="Equipo" name="equipo" required>
                                    <option value="Equipo" disabled selected hidden>Equipo</option>
                                    @foreach($listaEquipos as $equipo)
                                          @if(old('equipo')==$equipo->id)
                                                <option value="{{ $equipo->id }}" selected> {{ $equipo->nombreEquipo }}</option>
                                          @else
                                                <option value="{{ $equipo->id }}"> {{ $equipo->nombreEquipo }}</option>
                                          @endif
                                    @endforeach
                              </select>
                        </div>

                        <div class="col-md-4">
                              <button class="btn btn-success btn-block" type="submit">Crear jugador</button>
                        </div>
                  </div>
            </form>
      </div>
</div>
@endsection
