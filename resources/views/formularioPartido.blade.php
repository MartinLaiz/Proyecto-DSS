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
          <form action="{{action('PartidoController@ModificarPartido,$idmodificar')}}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}    
                  <div class="row form-group">
                        <div class="col-md-4">
                             <style>select:invalid { color: gray; }</style>
                              <select class="form-control" id="equipoLocal" placeholder="equipoLocal" name="equipoLocal" required>
                                    <option value="Equipo" disabled selected hidden>Equipo Local</option>
                                    @foreach($listaEquipos as $equipo)
                                          <option value="{{ $equipo->id }}"> {{ $equipo->nombreEquipo }}</option>
                                    @endforeach
                              </select>
                        </div>
                        <div class="col-md-4">
                              <style>select:invalid { color: gray; }</style>
                              <select class="form-control" id="equipoVisitante" placeholder="equipoVisitante" name="equipoVisitante" required>
                                    <option value="Equipo" disabled selected hidden>Equipo Visitante</option>
                                    @foreach($listaEquipos as $equipo)
                                          <option value="{{ $equipo->id }}"> {{ $equipo->nombreEquipo }}</option>
                                    @endforeach
                              </select>
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
                              <input class="form-control" id="Fecha" name="date" placeholder="Fecha" type="text" required/>
                        </div>


                        <div class="col-md-2">
                              <style>select:invalid { color: gray; }</style>
                              <select class="form-control" id="tipo" name="tipo" required>
                                    <option value="Tipo" disabled selected hidden>Tipo</option>
                                    <option value="Liga">Liga</option>
                                    <option value="Amistoso">Amistoso</option>
                              </select>
                        </div>
                  </div>

                  <div class="row form-group">
                        <div class="col-md-2">
                              <button class="btn btn-success btn-warning" type="submit">Modificar</button>
                        </div>
                   </div>
           </form> 
      </div>
</div>
@endsection