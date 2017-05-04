<table class="table">
    <thead>
    <tr>
        <th>Once Inicial</th>
        <th>Posición</th>
        <th>Banquillo</th>
        <th>Posición</th>
    </tr>
</thead>
    <tbody>
        @for($i = 0; $i < 11 ; $i++)
        <tr>
            @if($titulares[$i]->local == "si")
                <th> {!!$titulares[$i]->usuario->nombre!!} </th>
                @if($titulares[$i]->usuario->posicion == 1)
                    <td>Portero</td>
                @elseif($titulares[$i]->usuario->posicion == 2)
                    <td>Defensa</ttdh>
                @elseif($titulares[$i]->usuario->posicion == 3)
                    <td>Medio</td>
                @elseif($titulares[$i]->usuario->posicion == 4)
                    <td>Delantero</td>
                @else
                    <th></th>
                @endif

                @if($i < 7)
                    <th> {!!$banquillo[$i]->usuario->nombre!!} </th>
                     @if($banquillo[$i]->usuario->posicion == 1)
                        <td>Portero</td>
                    @elseif($banquillo[$i]->usuario->posicion == 2)
                        <td>Defensa</ttdh>
                    @elseif($banquillo[$i]->usuario->posicion == 3)
                        <td>Medio</td>
                    @elseif($banquillo[$i]->usuario->posicion == 4)
                        <td>Delantero</td>
                    @else
                        <th></th>
                    @endif
                @endif
            @endif
        </tr>
         @endfor
    </tbody>
</table>