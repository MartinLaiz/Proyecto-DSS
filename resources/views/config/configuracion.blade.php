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
            </ul>
      </div>
</nav>
