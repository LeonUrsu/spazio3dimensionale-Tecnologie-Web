@props(['malsol', 'prodotto'])
<div>
    {{ Breadcrumbs::render('prodotto.malsol.mostra', $prodotto, $malsol) }}
    @if($malsol)
    <p>titolo malfunzionamento : {{$malsol->titolo}}</p>
    <p>malfunzionamento : {{$malsol->mal}}</p>
    <p>soluzione : {{$malsol->sol}}</p>

    @can('isTecnicoAzienda')
    <form action="{{route('prodotto.malsol.form.aggiorna', $malsol->id)}}" method='GET'>
        <button type="submit">Aggiorna</button>
    </form>
    <form action="{{route('prodotto.malsol.cancella', $malsol->id)}}" method='POST'>
        @csrf
        @method('DELETE')
        <button type="submit">Cancella</button>
    </form>
    @endcan
    @else
    <p>Dati non disponibili</p>
    @endif
</div>