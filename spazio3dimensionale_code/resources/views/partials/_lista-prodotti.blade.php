@forelse ($prodotti as $prodotto )
<div style="display: flex; gap: 20px; align-items: center;" class="element">
    <div>
        @if($prodotto->immagine_path)
        <img src="{{ asset('immagini/' . $prodotto->immagine_path) }}" alt="Foto" style="width: 100px; height: 100px; object-fit: cover;">
        @else
        <img src="{{ asset('immagini/default.png') }}" alt="Immagine non disponibile" style="width: 100px; height: 100px; object-fit: cover;">
        @endif
    </div>
    <div>
        <h6 class="nome_prodotto">{{$prodotto->marca}} {{$prodotto->modello}} {{--{{$prodotto->prezzo}}$--}}</h6>
        <form action="{{route('prodotto.mostra', $prodotto->id)}}">
            <button>Mostra info prodotto</button>
        </form>
    </div>
</div>
<br>
@empty
<li>Nessun dato trovato.</li>
@endforelse
<div class="d-flex justify-content-center mt-4">
    {{ $prodotti->withQueryString()->links() }}
</div>