@extends('layouts.master')
@section('title', 'Inicio')
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

    <form action="{{action('JugadorController@formulario')}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    {{--Campos: nombre, apellidos, fNac, posicion, dorsal --}}
    
    {{--Nombre--}}
    <input class="form-control" placeholder="Nombre"    type="text"      name="Nombre"      id="nombre" required>
    {{--Apellidos--}}
    <input class="form-control" placeholder="Apellidos" type="text"      name="Apellidos"   id="apellidos" required>
{{--<input class="form-control" placeholder="Contraseña"type="password"  name="Contraseña"  id="contrasena">--}}
    
    {{--Fecha de nacimiento--}}
    <input class="form-control" id="date" name="date" placeholder="Nacido el" type="text" required/>
    
    
{{--<input class="form-control" placeholder="Nacido el" type="date"      name="Nacido el"   id="fNac">--}}

    {{--Posición--}}
    <style>select:invalid { color: gray; }</style>
    <select class="form-control" placeholder="Posición" name="Posición" required>
        <option value="Posición" disabled selected hidden>Posición</option>
        <option value="D">Delantero (D)</option>
        <option value="MC">Medio-centro (MC)</option>
        <option value="DF">Defensa (DF)</option>
        <option value="P">Portero (P)</option>
    </select>

    {{--Dorsal--}}
    <input class="form-control" placeholder="Dorsal"    type="number"    name="Dorsal"      id="dorsal" required>

    {{--Términos y condiciones--}}
    <div class="checkbox">
        <label for="terms"></label>
        <input type="checkbox" name="terms" id="terms" value="1" required><strong>¿Esclavizarlo?</strong></input>
    </div>
    
    <button type="submit">Crear</button>
    </form>

</div>
@endsection