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
