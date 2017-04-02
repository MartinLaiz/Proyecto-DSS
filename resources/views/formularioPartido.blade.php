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
            <div class="row form-group">
                  <div class="col-md-4">
                        <input class="form-control" placeholder="Equipo Local" type="text" name="equipoLocal" id="equipoLocal" required>
                  </div>
                  <div class="col-md-4">
                        <input class="form-control" placeholder="Equipo Visitante" type="text" name="equipoVisitante" id="equipoVisitante" required>
                  </div>
            </div>

            <div class="row form-group">
                  <div class="col-md-2">
                        <input class="form-control" placeholder="Goles Local" type="text" name="golesLocal" id="golesLocal" required>
                  </div>

                  <div class="col-md-2">
                        <input class="form-control" placeholder="Goles Visitante" type="text" name="golesVisitante" id="golesVisitante" required>
                  </div>

                  <div class="col-md-2">
                        <input class="form-control" id="fecha" name="date" placeholder="Fecha" type="text" required/>
                  </div>
            </div>
      </div>
</div>
