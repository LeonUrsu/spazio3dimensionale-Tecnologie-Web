@props(['malfunzionamenti', 'prodotto_id'])
<div>
    <p>Lista dei Malfunzionamenti:</p>
    <form action="{{route('prodotto.form.crea.malsol', $prodotto_id)}}">
        <button type="submit"> Crea Nuovo</button>
    </form>
    @forelse ($malfunzionamenti as $mal)
    <p>
        Descrizione : {{$mal->mal}}
    <form action="{{route('prodotto.malsol.mostra', $mal)}}" method="GET">
        <button type="submit">Vedi dettagli</button>
    </form>
    </p>
    <br>
    @empty
        <li>Nessun dato trovato.</li>
    @endforelse
</div>