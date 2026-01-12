@props(['prodotto'])
<div>
    <div>
        {{ \Diglactic\Breadcrumbs\Breadcrumbs::render('prodotto.mostra', $prodotto) }}
    </div>
    <img src="{{ asset('immagini/' . $prodotto->immagine_path) }}" alt="Immagine Prodotto" class="img_home">
    <div>Informazioni su {{$prodotto->marca}} {{$prodotto->modello}}</div>
    <div>Descrizione: {{$prodotto->descrizione}}</div>
    <div>Dimensioni: {{$prodotto->dimensioni}}</div>
    {{--<div>Prezzo: {{$prodotto->prezzo}}</div>--}}
    <div>Peso [kg]: {{$prodotto->peso}}</div>
    <div>Consumo Watt: {{$prodotto->consumo_watt}}</div>
    <div>Volume di stampa [cm x cm x cm] : {{$prodotto->volume_stampa}}</div>
    <div>Modalità di installazione: {{$prodotto->modalità_installazione}}</div>
    @can('isAdmin')
    <div class="button-vicini">
        <form action="{{route('prodotto.cancella', $prodotto->id)}}" method=POST class="form-conferma">
            @csrf
            @method('DELETE')
            <button type="submit">elimina Prodotto</button>
        </form>
        <form action="{{route('prodotto.form.aggiorna', $prodotto->id)}}" method=GET>
            <button type="submit">aggiorna Prodotto</button>
        </form>
    </div>
    @endcan
    @canany(['isTecnicoCentro', 'isTecnicoAzienda'])
    <form action="{{route('prodotto.malsol.lista', $prodotto->id)}}" method=GET>
        <button>Visualizza Malfunzionamenti</button>
    </form>
    @endcanany
</div>