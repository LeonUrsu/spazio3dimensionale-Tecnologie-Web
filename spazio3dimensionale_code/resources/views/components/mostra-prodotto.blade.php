@props(['prodotto'])
<div>
    <div>
        <form action="{{route('prodotto.lista')}}" method=GET>
            <button type="submit">Indietro</button>
        </form>
    </div>
    <div>Informazioni su {{$prodotto->marca}} {{$prodotto->modello}}</div>
    <div>Descrizione: {{$prodotto->descrizione}}</div>
    <div>Dimensioni: {{$prodotto->dimensioni}}</div>
    <div>Prezzo: {{$prodotto->prezzo}}</div>
    <div>Peso: {{$prodotto->peso}}</div>
    <div>Consumo Watt: {{$prodotto->consumo_watt}}</div>
    <div>Volume di stampa: {{$prodotto->volume_stampa}}</div>
    <div>Modalità di installazione: {{$prodotto->modalità_installazione}}</div>
    
    @can('isAdmin')
    <form action="{{route('prodotto.cancella', $prodotto->id)}}" method=POST>
        @csrf
        @method('DELETE')
        <button type="submit">elimina Prodotto</button>
    </form>
    <form action="{{route('prodotto.form.aggiorna', $prodotto->id)}}" method=GET>
        <button type="submit">aggiorna Prodotto</button>
    </form>
    @endcan

    @canany(['isTecnicoCentro', 'isTecnicoAzienda'])
    <form action="{{route('prodotto.malsol.lista', $prodotto->id)}}" method=GET>
        <button>Visualizza Malfunzionamenti</button>
    </form>
    @endcanany

    {{--@can('isTecnicoAzienda')
        <button></button>
        <button>aggiorna soluzione</button>
        @endcan--}}
</div>