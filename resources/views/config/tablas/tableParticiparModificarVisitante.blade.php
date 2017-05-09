 <table class="table table-striped table-responsive" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Jugador</th>
            <th>Posición</th>
            <th>Titular</th>
            <th>banquillo</th>

        </tr>
        <tbody>
        @foreach($visitantes as $visitante)
            @if($visitante->posicion != null)
            <tr>
                <th>{!!$visitante->nombre!!}</th>
                @if($visitante->posicion == 1)
                    <th>Portero</th>
                @elseif($visitante->posicion == 2)
                    <th>Defensa</th>
                @elseif($visitante->posicion == 3)
                    <th>Medio</th>
                @elseif($visitante->posicion == 4)
                    <th>Delantero</th>
                @else
                    <th></th>
                @endif
  
                <td>
                    <div class="radio">
                        @foreach($jugadores as $jugador)
                            @if($jugador.id == $visitante->id)
                                <label>
                                    <input type="radio" name="{!!$visitante->id!!}" id="titularLocal {!!$visitante->id!!}"  value="titularLocal {!!$visitante->id!!}" checked >
                                </label>
                            @else 
                                <label>
                                    <input type="radio" name="{!!$visitante->id!!}" id="titularLocal {!!$visitante->id!!}"  value="titularLocal {!!$visitante->id!!}"  >
                                </label>
                            @endif
                        @endforeach
                    </div>

                </td>
                <td>
                    <div class="radio">
                       @foreach($jugadores as $jugador)
                            @if($jugador.id == $visitante->id)
                                <label>
                                    <input type="radio" name="{!!$visitante->id!!}" id="titularLocal {!!$visitante->id!!}"  value="titularLocal {!!$visitante->id!!}" checked >
                                </label>
                            @else 
                                <label>
                                    <input type="radio" name="{!!$visitante->id!!}" id="titularLocal {!!$visitante->id!!}"  value="titularLocal {!!$visitante->id!!}"  >
                                </label>
                            @endif
                        @endforeach
                    </div>

                </td>
            </tr>
            @endif
        @endforeach
        </tbody>
</table>