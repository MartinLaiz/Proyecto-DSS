<!-- Muestra nuestros jugadores de la base de datos -->
{{ $lista->links() }}
<table class="table table-striped table-responsive" cellspacing="0" width="100%">
      <thead>
            <tr>
                  @foreach($values as $key => $v)
                  
                  <th>{{ $v }}</th>
                  @endforeach
                  <th>Acción</th>
            </tr>
      </thead>
      <tbody>
      
            @foreach($lista as $elemento)
            <tr>
            
                  @foreach($values as $key => $v)
                  <td>{{$elemento[$key]}}</td>
                      
                  @endforeach
                  <td> <button type="button" class="btn btn-danger">Borrar</button></td>
            </tr>
            @endforeach
      </tbody>
</table>
