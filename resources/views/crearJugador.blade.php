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
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
{{------------------------------------------------}}
<div class="contenedor row">

    <form action="{{action('JugadorController@crearJugador')}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        {{--Campos: nombre, apellidos, fNac, posicion, dorsal --}}
        
        {{--DNI--}}
        <input class="form-control" placeholder="DNI" type="text"      name="dni"   id="dni" required>
        {{--Nombre--}}
        <input class="form-control" placeholder="Nombre"    type="text"      name="nombre"      id="nombre" required>
        {{--Apellidos--}}
        <input class="form-control" placeholder="Apellidos" type="text"      name="apellidos"   id="apellidos" required>
        
        {{--<input class="form-control" placeholder="Contraseña"type="password"  name="contraseña"  id="contrasena">--}}
        
        {{--Fecha de nacimiento--}}
        <input class="form-control" id="fNac" name="date" placeholder="Nacido el" type="text" required/>

        {{--Posición--}}
        <style>select:invalid { color: gray; }</style>
            <select class="form-control" id="posicion" placeholder="Posición" name="posicion" required>
                <option value="Posición" disabled selected hidden>Posición</option>
                <option value="Delantero">Delantero</option>
                <option value="Mediocentro">Medio</option>
                <option value="Defensa">Defensa</option>
                <option value="Portero">Portero</option>
            </select>

        {{--Cargo--}}
        <input class="form-control" placeholder="Cargo"    type="number"    name="cargo"      id="cargo" required>

        {{--Dorsal--}}
        <input class="form-control" placeholder="Dorsal"    type="number"    name="dorsal"      id="dorsal" required>

        {{--Equipo--}}
        <style>select:invalid { color: gray; }</style>
            <select class="form-control" id="equipo" placeholder="Equipo" name="Equipo" required>
                <option value="Equipo" disabled selected hidden>Equipo</option>
                <option value="1">UA CF</option>
                @foreach($listaEquipos as $equipo)
                    <option value={{$equipo->id}}>{{$equipo->nombre}}</option>
                @endforeach
            </select>

        {{--Términos y condiciones--}}
        <div class="checkbox">
            <label for="terms"></label>
            <input type="checkbox" name="terms" id="terms" value="1" required><strong>¿Esclavizarlo?</strong></input>
        </div>
        
        <button type="submit">Crear jugador</button>
    </form>

</div>
@endsection