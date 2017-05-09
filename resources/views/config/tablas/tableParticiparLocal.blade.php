    <thead>
        <tr>
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