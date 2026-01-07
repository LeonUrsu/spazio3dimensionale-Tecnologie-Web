<div>
    {{ Breadcrumbs::render('prodotto.lista') }}
    <form action="{{ route('prodotto.lista') }}" method="GET" id="form-ricerca">
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
    <div id="risultati-lista">
        @include('partials._lista-prodotti')
    </div>
</div>

{{-- Spostiamo la sezione scripts qui sotto, pulita --}}
@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/ajax_lista.js') }}"></script>
@endsection