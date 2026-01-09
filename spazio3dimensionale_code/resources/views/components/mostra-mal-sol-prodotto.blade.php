@props(['malsol', 'prodotto'])
<div>
    <div>
        {{ Breadcrumbs::render('prodotto.malsol.mostra', $prodotto, $malsol) }}
    </div>
    @if($malsol)
    <p><strong>titolo malfunzionamento :</strong> {{$malsol->titolo}}</p>
    <p><strong>malfunzionamento :</strong> {{$malsol->mal}}</p>
    <p><strong>soluzione :</strong> {{$malsol->sol}}</p>

    @can('isTecnicoAzienda')
    <div class="button-vicini">
        <form action="{{route('prodotto.malsol.form.aggiorna', $malsol->id)}}" method='GET'>
            <button type="submit">Aggiorna</button>
        </form>
        <form action="{{route('prodotto.malsol.cancella', $malsol->id)}}" method='POST'>
            @csrf
            @method('DELETE')
            <button type="submit">Cancella</button>
        </form>
    </div>
    @endcan
    @else
    <p>Dati non disponibili</p>
    @endif
</div>