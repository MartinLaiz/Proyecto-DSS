@extends('layouts.master')
@section('title', 'Crear Usuario')
@section('content')
@include('cabecera', array('section'=>'Inicio'))

<div class="contenedor row">
      <div class="col-md-10 col-md-offset-1">
            <h2>Crear un jugador</h2>
            <!-- Errores -->
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  @foreach ($errors->all() as $message)
                  <strong>Error! </strong>{{$message}}
                  @endforeach
            </div>
            @endif
            <!-- Fin errores-->
            <form class="form-horizontal" action="{{action('UsuarioController@create')}}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('POST') }}
                  <div class="col-md-8">
                        <div class="form-group row">
                              <div class="col-md-5">
                                    <label class="control-label col-md-3">DNI:</label>
                                    <div class="col-md-8">
                                          <input type="text" class="form-control" name="dni" placeholder="12345678A">
                                    </div>
                              </div>
                              <div class="col-md-7">
                                    <label class="control-label col-md-6">Fecha de nacimiento:</label>
                                    <div class="col-md-6">
                                          <input type="date" class="form-control" name="fnac">
                                    </div>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-md-3">Nombre y apellidos:</label>
                              <div class="col-md-9 row">
                                    <div class="col-md-6">
                                          <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                                    </div>
                                    <div class="col-md-6">
                                          <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
                                    </div>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-md-3">Equipo:</label>
                              <div class="col-md-8">
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
                        </div>
                  </div>
                  <div class="col-md-4">
                        <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                    <input style="display:none" type="file" name="foto" id="foto" value="foto">
                                    <input type="button" class="btn btn-primary btn-block" name="fakeFoto" onclick="document.getElementById('foto').click()" value="Elegir imagen">
                              </div>
                        </div>
                        <div class="form-group">
                              <div class="col-md-6">
                                    <select class="form-control" id="rol" name="rol" value="{{ old('rol') }}" onchange="cargoFilter()" required>
                                          <option value="0" selected>Jugador</option>
                                          <option value="1">Entrenador</option>
                                          <option value="2">Director</option>
                                          <option value="3">Administrador</option>
                                    </select>
                              </div>
                              <div class="col-md-6">
                                    <input class="form-control" type="number" min="1" name="dorsal" id="dorsal" placeholder="Dorsal" value="{{ old('cargo') }}">
                              </div>
                        </div>
                        <div class="form-group">
                              <div class="col-md-8 col-md-offset-2">
                                    <select class="form-control" id="cargo" name="cargo" value="{{ old('cargo') }}" required>
                                          <option value="0" selected>No capitan</option>
                                          <option value="1">Primer capitan</option>
                                          <option value="2">Segundo capitan</option>
                                          <option value="3">Tercer capitan</option>
                                    </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <div class="col-md-8 col-md-offset-2">
                                    <select class="form-control" id="posicion" name="posicion" value="{{ old('posicion') }}" required>
                                          <option value="Posicion" disabled selected hidden>Posición</option>
                                          <option value="Delantero">Delantero</option>
                                          <option value="Medio">Medio</option>
                                          <option value="Defensa">Defensa</option>
                                          <option value="Portero">Portero</option>

                                    </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <div class="col-md-8 col-md-offset-2">
                                    <input type="number" class="form-control" name="salario" placeholder="Salario">
                              </div>
                        </div>
                  </div>
            </form>
      </div>
</div>
<script type="text/javascript">
function eliminarOpciones(){
      var element = document.getElementById('cargo');
      while (element.options.length != 0) {
            element.remove(0);
      }
      var pos = document.getElementById('posicion');
      while (pos.options.length != 0) {
            pos.remove(0);
      }
}

function opcionesJugador(){
      eliminarOpciones();
      var element = document.getElementById('cargo');
      var options = ['Sin cargo','Primer capitan','Segundo capitan','Tercer capitan'];
      for (var i = 0; i < 4; i++) {
            var option = document.createElement('option');
            option.text = options[i];
            option.value = i;
            element.add(option);
      }
      element = document.getElementById('posicion');
      var options = ['Portero','Defensa','Medio','Delantero'];
      for (var i = 0; i < 4; i++) {
            var option = document.createElement('option');
            option.text = options[i];
            option.value = i+1;
            element.add(option);
      }
}

function opcionesEntrenador(){
      eliminarOpciones();
      var element = document.getElementById('cargo');
      var options = ['Primer entrenador','Segundo entrenador'];
      for (var i = 0; i < 2; i++) {
            var option = document.createElement('option');
            option.text = options[i];
            option.value = i+1;
            element.add(option);
      }
      var pos = document.getElementById('posicion');
      var option = document.createElement('option');
      option.text = "No disponible";
      option.value = -1;
      pos.add(option);
}

function opcionesDirecAdmin(){
      eliminarOpciones();
      var option = document.createElement('option');
      option.text = "No disponible";
      option.value = -1;
      var element = document.getElementById('cargo');
      element.add(option);

      var option = document.createElement('option');
      option.text = "No disponible";
      option.value = -1;
      var pos = document.getElementById('posicion');
      pos.add(option);
}

function cargoFilter(){
      var posicion = document.getElementById('posicion');
      posicion.disabled = true;
      var rol = document.getElementById('cargo');
      rol.disabled = true;

      var option = document.getElementById('rol').value;
      if(option == 0){
            posicion.disabled = false;
            rol.disabled = false;
            opcionesJugador();
      }
      else if (option == 1) {
            opcionesEntrenador();
            rol.disabled = false;
      }
      else{
            opcionesDirecAdmin();
      }
}
window.onload = cargoFilter;
</script>
@endsection
