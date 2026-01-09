@props(['centri'])
<div>
    <div>
        {{ Breadcrumbs::render() }}
    </div>
    <h1>Lista dei centri disponibili per la manutenzione</h1>
    <div class="lista">
        @can('isAdmin')
        <form action="{{route('centro.form.crea')}}">
            <button>Crea Nuovo</button>
        </form>
        @endcan
        @foreach ($centri as $centro )
        <div class="element">
            <p class="nome_centro">{{$centro->nome}}</p>
            <p class="indirizzo_centro">indirizzo : {{$centro->città}}, {{$centro->via}} {{$centro->civico}}</p>
            @can('isAdmin')
            <div class="button-vicini">
                <form action="{{route('centro.form.aggiorna', $centro->id)}}">
                    <button>Modifica</button>
                </form>
                <form action="{{route('centro.cancella', $centro->id)}}" method="POST">
                    @method('DELETE')
                    <button>Elimina</button>
                </form>
            </div>
            @endcan
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $centri->links() }}
    </div>
</div>