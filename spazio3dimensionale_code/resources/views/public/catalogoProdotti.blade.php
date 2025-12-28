<div>
    <form action="{{route('home')}}">
        <button>Indietro</button>
    </form>
    <h1>Catalogo dei prodotti disponibili</h1>
    <form action="{{route('prodotto.formCrea')}}">
        <button>Aggiungi Prodotto</button>
    </form>
    @foreach ($prodotti as $prodotto )
    <div>
        <h2 class="nome_centro">prodotto: {{$prodotto->marca}} {{$prodotto->modello}} - {{$prodotto->prezzo}}$</h2>
        <form action="{{route('prodotto.mostra', $prodotto->id)}}">
            <button>Mostra info prodotto</button>
        </form>
        <br>
    </div>
    @endforeach
    <div>
        {{ $prodotti->links() }}
    </div>
</div>