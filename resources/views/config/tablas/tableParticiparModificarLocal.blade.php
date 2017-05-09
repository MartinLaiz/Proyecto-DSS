

 
 
 <table class="table table-striped table-responsive" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Jugador</th>
            <th>Posición</th>
            <th>Titular</th>
            <th>banquillo</th>

        </tr>
        <tbody>
        @foreach($locales as $local)
            @if($local->posicion != null)
            <tr>
                <th>{!!$local->nombre!!}</th>
                @if($local->posicion == 1)
                    <th>Portero</th>
                @elseif($local->posicion == 2)
                    <th>Defensa</th>
                @elseif($local->posicion == 3)
                    <th>Medio</th>
                @elseif($local->posicion == 4)
                    <th>Delantero</th>
                @else
                    <th></th>
                @endif
  
                <td>
                    <div class="radio">
                        @foreach($jugadores as $jugador)
                                <label>
                                    <input type="radio" name="{!!$local->id!!}" id="titularLocal {!!$local->id!!}"  value="titularLocal {!!$local->id!!}" checked >
                                </label>
                                @break
                                <label>
                                    <input type="radio" name="{!!$local->id!!}" id="titularLocal {!!$local->id!!}"  value="titularLocal {!!$local->id!!}"  >
                                </label>
                        @endforeach
                    </div>

                </td>
                <td>
                    <div class="radio">
                       @foreach($jugadores as $jugador)
                            @if($jugador->jugador == $local->id)
                                <label>
                                    <input type="radio" name="{!!$local->id!!}" id="titularLocal {!!$local->id!!}"  value="titularLocal {!!$local->id!!}" checked >
                                </label>
                            @else 
                                <label>
                                    <input type="radio" name="{!!$local->id!!}" id="titularLocal {!!$local->id!!}"  value="titularLocal {!!$local->id!!}"  >
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