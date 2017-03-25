<!-- Muestra nuestros jugadores de la base de datos -->
<table class="table table-bordered" cellspacing="0" width="100%">
      <thead>
            <tr>
                  @foreach($values as $key => $v)
                  <th>{{ $v }}</th>
                  @endforeach
            </tr>
      </thead>
      <tbody>
            @foreach($lista as $pos => $elemento)
            <tr>
                  @foreach($values as $key => $v)
                  <th>{{$elemento[$key]}}</th>
                  @endforeach
            </tr>
            @endforeach
      </tbody>
</table>
