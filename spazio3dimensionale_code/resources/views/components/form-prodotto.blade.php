@props(['action', 'prodotto'=>null, 'metodo'=>'POST'])
<div>
    <form action="{{$action}}" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Sei sicuro di voler salvare le modifiche?')">
        @csrf
        @if($metodo == 'PUT') @method('PUT') @endif
        <input type="file" name="immagine" accept="image/*"> {{--per aggiorna non si salva l'immagine--}}
        <input type="text" name="marca" placeholder="marca" value="{{ old('marca', $prodotto?->marca) }}">
        <input type="text" name="modello" placeholder="modello" value="{{ old('modello', $prodotto?->modello) }}">
        <textarea name="descrizione" placeholder="descrizione">{{ old('descrizione', $prodotto?->descrizione) }}</textarea>
        <textarea name="modalità_installazione" placeholder="modalità di installazione">{{ old('modalità_installazione', $prodotto?->modalità_installazione) }}</textarea>
        <input type="text" name="prezzo" placeholder="prezzo" value="{{ old('prezzo', $prodotto?->prezzo) }}">
        <input type="text" name="dimensioni" placeholder="dimensioni" value="{{ old('dimensioni', $prodotto?->dimensioni) }}">
        <input type="text" name="peso" placeholder="peso" value="{{ old('peso', $prodotto?->peso) }}">
        <input type="text" name="consumo_watt" placeholder="consumo watt" value="{{ old('consumo_watt', $prodotto?->consumo_watt) }}">
        <input type="text" name="volume_stampa" placeholder="volume di stampa" value="{{ old('volume_stampa', $prodotto?->volume_stampa) }}">
        <button type="submit">Salva</button>
    </form>
    {{--potrei aggiungere una box per fare drag and drop delle foto del prodotto--}}
    <a href="{{ url()->previous() }}">
        <button type="button">Annulla</button>
    </a>
</div>