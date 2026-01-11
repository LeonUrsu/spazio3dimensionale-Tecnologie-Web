{{--i l crea dovrebbe stare dentro il prodotto così si passa l'id prodotto da associare al malSol--}}
@props(['action', 'malSol'=>null, 'method'=>'POST', 'prodotto_id'])
<div class="element_with_button_column">
    <form action="{{$action}}" method="POST" class="form-conferma">
        @csrf
        @if($method == 'PUT') @method('PUT') @endif
        <input type="hidden" name="prodotto_id" value={{$prodotto_id}}>
        <div>
            <textarea name="titolo" placeholder="titolo" class="textarea-titolo @error('titolo') is-invalid @enderror">{{ old('mal', $malSol?->titolo) }}</textarea>
            <label>Titolo:</label>
        </div>
        <div>
            <textarea name="mal" placeholder="malfunzionamento" class="@error('mal') is-invalid @enderror">{{ old('mal', $malSol?->mal) }}</textarea>
            <label>Malfunzionamento:</label>
        </div>
        <div>
            <textarea name="sol" placeholder="soluzione" class="@error('sol') is-invalid @enderror">{{ old('sol', $malSol?->sol) }}</textarea>
            <label>Soluzione:</label>
        </div>
        @if ($errors->any())
        <div class="alert-error-summary" style="color: red">
            <strong>Attenzione:</strong> Ci sono degli errori. Controlla i campi evidenziati.
        </div>
        @endif
        <button type="submit">Salva</button>
    </form>
    <a href="{{ url()->previous() }}">
        <button type="button">Annulla</button>
    </a>
</div>