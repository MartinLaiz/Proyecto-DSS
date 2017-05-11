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
                              <li><a href="#consumergoods" data-toggle="modal">Consumer goods</a></li>
                              <li><a href="{{action('CompeticionController@editar')}}">Modificar</a></li>
                        </ul>
                  </li>
            </ul>
      </div>
</nav>





<div class="modal fade" id="consumergoods" data-target="#consumergoods">
      <div class="modal-dialog">
      
            <div class="modal-content">
                  <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                        <h2>Añadir una competición</h2>
                        <form>
                              <div class="form-group">
                              <label for="Username">Nombre</label>
                              <input type="text" name="text" class="form-control">
                              </div>
                        </form>
                  </div>
                  <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                  </div>
            </div>
      </div>
</div>