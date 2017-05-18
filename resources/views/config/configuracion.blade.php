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


<nav class="navbar navbar-default sidebar" role="navigation" >
      <div class="container-fluid">
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Usuarios <span class="caret"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                              <li><a href="{{action('UsuarioController@getFormCreate')}}">Crear</a> </li>
                              <li><a href="{{action('UsuarioController@getUsuariosUpdate')}}">Modificar</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon glyphicon-th-list"></span> Partidos <span class="caret"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                              <li><a href="{{action('PartidoController@formularioInsertar')}}">Crear</a> </li>
                              <li><a href="{{action('PartidoController@editarPartidos')}}">Modificar</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th"></span> Equipos <span class="caret"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                              <li><a href="{{action('EquipoController@formulario')}}">Crear</a> </li>
                              <li><a href="{{action('EquipoController@editar')}}">Modificar</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th"></span> Competiciones <span class="caret"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">                     
                              <li><a href="#consumergoods" data-toggle="modal">Crear</a></li>
                              <li><a href="{{action('CompeticionController@editar')}}">Modificar</a></li>
                        </ul>
                  </li>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th"></span> Temporada <span class="caret"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">                     
                              <li><a href="#creartemporada" data-toggle="modal">Crear</a></li>
                              <li><a href="{{action('TemporadaController@editar')}}">Modificar</a></li>
                        </ul>
                  </li>
            </ul>
      </div>
</nav>


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




{{-- Competicion --}}
<div class="modal fade" id="consumergoods" data-target="#consumergoods">
      <div class="modal-dialog">
      
            <div class="modal-content">
                  <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                        <h2>Añadir una competición</h2>
                        <form action="{{action('CompeticionController@crearCompeticion')}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}  
                              <div class="form-group">
                                    <label for="Username">Nombre</label>
                                    <input class="form-control"  type="text" name="nombre" id="nombre" required>
                              </div>
                        </div>
                        <div class="modal-footer">
                              <button class="btn btn-success btn-success" type="submit">Aceptar</button>
                        </div>
                  </form>
            </div>
      </div>
</div>


{{-- Temporada --}}
<div class="modal fade" id="creartemporada" data-target="#creartemporada">
      <div class="modal-dialog">
      
            <div class="modal-content">
            
                  <div class="modal-header">
                  
                        <button class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <div class="modal-body">
                        <h2> Crear Temporada </h2>
                         <form action="{{action('TemporadaController@crearTemporada')}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}  
                              <div class="row form-group">
                                    <div class="col-md-6">
                                          <input class="form-control" onfocus="(this.type='date')" id="fecha" name="inicio" placeholder="Inicio de la temporada" type="text" required/>
                                    </div>
                                    <div class="col-md-6">
                                          <input class="form-control" onfocus="(this.type='date')" id="fecha" name="fin" placeholder="Fin de la temporada" type="text" required/>
                                    </div>
                              </div>
                        </div>
                        <div class="modal-footer">
                              <button class="btn btn-success btn-success" type="submit">Aceptar</button>
                        </div>
                  </form>
            </div>
      </div>
</div>





