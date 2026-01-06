@props(['malfunzionamenti', 'prodotto'])
<div>
    {{ Breadcrumbs::render('prodotto.malsol.lista', $prodotto) }}
    <form action="{{ route('prodotto.malsol.lista', $prodotto->id) }}" method="GET">
        <input type="text"
            name="ricerca"
            placeholder="Cerca termine nella descrizione ..."
            value="{{ request('ricerca') }}">
        <button type="submit"> Cerca </button>

        @if(request('ricerca'))
        <a href="{{ route('prodotto.lista') }}">Annulla</a>
        @endif
    </form>
    <p>Lista dei Malfunzionamenti:</p>
    @can('isTecnicoAzienda')
    <form action="{{route('prodotto.form.crea.malsol', $prodotto->id)}}">
        <button type="submit"> Crea Nuovo</button>
    </form>
    @endcan
    @forelse ($malfunzionamenti as $mal)
    <div>
        <p> Titolo : {{$mal->titolo}}</p>
        <p> Descrizione : {{$mal->mal}}</p>
        <form action="{{route('prodotto.malsol.mostra', $mal->id)}}" method="GET">
            <button type="submit">Vedi dettagli</button>
        </form>
    </div>
    <br>
    @empty
    <li>Nessun dato trovato.</li>
    @endforelse
</div>