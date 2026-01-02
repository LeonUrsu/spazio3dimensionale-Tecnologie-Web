{{--i l crea dovrebbe stare dentro il prodotto così si passa l'id prodotto da associare al malsol--}}
props(['rotta', 'malsol', 'metodo'->'POST', 'prodotto_id'])
<div>
    <form action="{{ $malsol ? route($rotta, $malsol->id) : route($rotta) }}" method="POST">
        @csrf
        @if(metodo == 'PUT') @method('PUT') @endif
        <input type="hidden" name="prodotto_id" value="{{ $prodotto_id }}">
        <label>Malfunzionamento:</label>
        <textarea name="mal" placeholder="malfunzionamento">{{ old('mal', $malsol?->mal) }}</textarea>
        <label>Soluzione:</label>
        <textarea name="sol" placeholder="soluzione">{{ old('sol', $malsol?->sol) }}</textarea>
        <button type="submit">Salva</button>
        {{--Mettere una schermata di verifica se si vuole procedere con il salvataggio--}}
    </form>
    <a href="{{ url()->previous() }}">
        <button type="button">Annulla</button>
    </a>
</div>