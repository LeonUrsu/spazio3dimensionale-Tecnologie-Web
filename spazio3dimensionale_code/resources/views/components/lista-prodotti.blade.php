<div>
    {{ Breadcrumbs::render('prodotto.lista') }}
    <form action="{{ route('prodotto.lista') }}" method="GET">
        <input type="text"
            name="ricerca"
            placeholder="Cerca descrizione (es. lav*)..."
            value="{{ request('ricerca') }}">
        <button type="submit"> Cerca </button>

        @if(request('ricerca'))
        <a href="{{ route('prodotto.lista') }}">Annulla</a>
        @endif
    </form>
    <h1>Catalogo dei prodotti disponibili</h1>
    @can('isAdmin')
    <form action="{{route('prodotto.form.crea')}}">
        <button>Aggiungi Prodotto</button>
    </form>
    @endcan
    <br>
    @forelse ($prodotti as $prodotto )
    <div style="display: flex; gap: 20px; align-items: center;">
        <div>
            @if($prodotto->immagine_path)
            <img src="{{ asset('storage/immagini/' . $prodotto->immagine_path) }}" alt="Foto" style="width: 100px; height: 100px; object-fit: cover;">
            @else
            <img src="{{ asset('immagini/default.png') }}" alt="Immagine non disponibile" style="width: 100px; height: 100px; object-fit: cover;">
            @endif
        </div>
        <p class="nome_prodotto">prodotto: {{$prodotto->marca}} {{$prodotto->modello}} - {{$prodotto->prezzo}}$</p>
        <form action="{{route('prodotto.mostra', $prodotto->id)}}">
            <button>Mostra info prodotto</button>
        </form>
    </div>
    <br>
    @empty
    <li>Nessun dato trovato.</li>
    @endforelse
    <div>
        {{ $prodotti->links() }}
    </div>
</div>