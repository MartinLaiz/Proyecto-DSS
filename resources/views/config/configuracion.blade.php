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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                              <li><a href="{{action('EquipoController@formulario')}}">Crear</a> </li>
                              <li><a href="#">Modificar</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Partidos <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-option-vertical"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                              <li><a href="{{action('PartidoController@formularioInsertar')}}">Crear</a> </li>
                              <li><a href="{{action('PartidoController@editarPartidos')}}">Modificar</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Equipos <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                              <li><a href="{{action('EquipoController@formulario')}}">Crear</a> </li>
                              <li><a href="{{action('EquipoController@editar')}}">Modificar</a></li>
                        </ul>
                  </li>
                  <li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
            </ul>
      </div>
</nav>
