<table class="table">
    <thead>
    <tr>
        <th>Once Inicial</th>
        <th>Banquillo</th>
    </tr>
</thead>
    <tbody>

        <tr>
        <td>
                @foreach($titulares as $titular)
                     {!!$titular->usuario->nombre!!}

                @endforeach
            </td>

             <td>
                @foreach($banquillo as $b)
                     {!!$b->usuario->nombre!!}

                @endforeach
            </td>
        </tr>
    
    </tbody>
</table>