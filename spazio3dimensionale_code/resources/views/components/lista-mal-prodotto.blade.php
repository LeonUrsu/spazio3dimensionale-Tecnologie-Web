@props(['malfunzionamenti', 'prodotto'])
<div>
    {{ Breadcrumbs::render('prodotto.malsol.lista', $prodotto) }}
    <form action="{{ route('prodotto.malsol.lista', $prodotto->id) }}" method="GET" id="form-ricerca">
        <input type="text"
            name="ricerca"
            placeholder="Cerca termine nella descrizione ..."
            value="{{ request('ricerca') }}">
        <button type="submit"> Cerca </button>

        @if(request('ricerca'))
        <a href="{{ route('prodotto.malsol.lista', $prodotto->id) }}">Annulla</a>
        @endif
    </form>
    <p>Lista dei Malfunzionamenti:</p>
    @can('isTecnicoAzienda')
    <form action="{{route('prodotto.form.crea.malsol', $prodotto->id)}}">
        <button type="submit"> Crea Nuovo</button>
    </form>
    @endcan
    <div id="risultati-lista">
        @include('partials._lista-mal-prodotto')
    </div>
</div>

{{-- Spostiamo la sezione scripts qui sotto, pulita --}}
@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/ajax_lista.js') }}"></script>
@endsection