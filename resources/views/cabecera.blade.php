<nav class="barraNav navbar navbar-default navbar-fixed-top">
      <div class="container">
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
            </button>
            <a href="{{action('EquipoController@getHome')}}" class="navbar-brand pull-left"><img src="images/Escudo.png" alt="Imagen del escudo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                        <li class="divider" role="separator"></li>
                        @if($section == "inicio")
                               <li class="active"><a href="{{action('EquipoController@getHome')}}">Inicio</a></li>
                        @else
                              <li><a href="{{action('EquipoController@getHome')}}">Inicio</a></li>
                        @endif
                        @if($section == "perfil")
                               <li class="active"><a href="#">Partidos</a></li>
                        @else
                              <li><a href="#">Partidos</a></li>
                        @endif
                        @if($section == "plantilla")
                               <li class="active"><a href="{{action('JugadorController@getJugadores')}}">Plantilla</a></li>
                        @else
                              <li><a href="{{action('JugadorController@getJugadores')}}">Plantilla</a></li>
                        @endif
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi perfil <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="#">Mi perfil</a></li>
                                    <li><a href="/">Cerrar sesión</a></li>
                              </ul>
                        </li>
                        <li class="divider" role="separator"></li>
                  </ul>
            </div>
      </div>
</nav>
