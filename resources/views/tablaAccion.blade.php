<!-- Muestra nuestros jugadores de la base de datos -->
{{ $lista->links() }}
<table class="table table-striped table-responsive" cellspacing="0" width="100%">
      <thead>
            <tr>
                  @foreach($values as $key => $v)
                  <th>{{ $v }}</th>
                  @endforeach
                  <th>Acciones</th>
            </tr>
      </thead>
      <tbody>
            @foreach($lista as $elemento)
            <tr>
                  @foreach($values as $key => $v)
                  <td>{!!$elemento[$key]!!}</td>
                  @endforeach
            
                  <form action="{{ action('PartidoController@EliminarPartido', $elemento->id) }}">
                        {{ csrf_field() }}
                        <td>  <button type="submit" class="btn btn-danger">Borrar</button>

                   </form>
                        <form action="/formularioPartido">
                              <button type="submit" class="btn btn-warning">Modificar</button>

                        </form>
                        
                        
                        </td>
                 
            </tr>
            @endforeach
      </tbody>
</table>
