<!-- Muestra nuestros jugadores de la base de datos -->
{{ $lista->links() }}
<table class="table table-striped table-responsive" cellspacing="0" width="100%">
      <thead>
            <tr>
                  @foreach($values as $key => $v)
                  <th><!-- Controller tiene 2 atributos: name, type -->
                  <a href=
                  @if($controller['type'] == 'asc' && $controller['sort'] == strtolower($v))
                        {{action($controller['name'],['sort' => strtolower($v), 'type' => 'desc'])}}
                  @else
                        {{action($controller['name'],['sort' => strtolower($v), 'type' => 'asc'])}}
                  @endif
                  >
                  @if($v == 'fNac') Fecha de nacimiento
                  @else {{ $v }}
                  @endif
                  </a></th>
                  @endforeach
            </tr>
      </thead>
      <tbody>
            @foreach($lista as $elemento)
            <tr>

                  @foreach($values as $key => $v)
                  <td>{!!$elemento[$key]!!}</td>

                  @endforeach
            </tr>
            @endforeach
      </tbody>
</table>
