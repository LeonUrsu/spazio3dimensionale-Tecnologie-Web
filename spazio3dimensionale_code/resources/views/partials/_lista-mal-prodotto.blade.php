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