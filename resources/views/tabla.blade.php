<!-- Muestra nuestros jugadores de la base de datos -->
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
            <tr>
                  @foreach($values as $key => $v
                  <th>{{$v}}</th>
                  @endforeach
            </tr>
      </thead>
      <tfoot>
            <tr>
                  @foreach($values as $key => $v)
                  <th>{{$v}}</th>
                  @endforeach
            </tr>
      </tfoot>
      <tbody>
            @foreach($lista as $elemento)
            <tr>
                  @foreach($values as $key => $v)
                  <th>{{$elemento->$key}}</th>
                  @endforeach
            </tr>
            @endforeach
      </tbody>
</table>
<!--
      $values es una array con las columnas de la tabla
            EJ. name => Nombre

      $lista es un array de las lineas de la tabla

      view('plantilla',array('name'=>'Nombre'),array(Usuario1))
      Usuario1 tiene que tener el atriburo name.
-->
