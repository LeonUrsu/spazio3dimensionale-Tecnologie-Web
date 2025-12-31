@props(['centri'])
<div>

    <h1>Lista dei centri disponibili per la manutenzione</h1>
    @can('isAdmin')
    <form action="{{route('centro.form.crea')}}">
        <button>Crea Nuovo Centro Di Assistenza</button>
    </form>
    @endcan
    @foreach ($centri as $centro )
    <div>
        <h3 class="nome_centro">centro: {{$centro->nome}}</h3>
        <h3 class="indirizzo_centro">indirizzo centro : {{$centro->città}}, {{$centro->via}} {{$centro->civico}}</h3>
        @can('isAdmin')
        <p>
        <form action="{{route('centro.form.aggiorna', $centro->id)}}">
            <button>Modifica</button>
        </form>
        </p>
        <p>
        <form action="{{route('centro.cancella', $centro->id)}}">
            <button>Elimina</button>
        </form>
        </p>
        @endcan
        <br>
    </div>
    @endforeach
    <div>
        {{ $centri->links() }}
    </div>
</div>