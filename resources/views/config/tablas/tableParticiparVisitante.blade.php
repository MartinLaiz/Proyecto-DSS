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
        @for($i = 11; $i < 22 ; $i++)
        <tr>
            @if($titulares[$i]->local == "no")
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

                @if($i < 18)
                    <th> {!!$banquillo[24 - $i]->usuario->nombre!!} </th>

                    @if($banquillo[24 - $i]->usuario->posicion == 1)
                        <td>>Portero</td>
                    @elseif($banquillo[24 - $i]->usuario->posicion == 2)
                        <td>Defensa</ttdh>
                    @elseif($banquillo[24 - $i]->usuario->posicion == 3)
                        <td>Medio</td>
                    @elseif($banquillo[24 - $i]->usuario->posicion == 4)
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