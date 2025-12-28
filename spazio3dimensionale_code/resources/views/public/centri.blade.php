<div>
    <form action="{{route('home')}}">
        <button>Indietro</button>
    </form>
    <h1>Lista dei centri</h1>
    @foreach ($centri as $centro )
    <div>
        <h3 class="nome_centro">centro: {{$centro->nome}}</h1>
            <h3 class="indirizzo_centro">indirizzo centro : {{$centro->città}}, {{$centro->via}} {{$centro->civico}}</h1>
                <br>
    </div>
    @endforeach
    <div>
        {{ $centri->links() }}
    </div>
</div>