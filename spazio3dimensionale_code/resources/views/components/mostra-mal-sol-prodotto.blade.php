@props(['malSol', 'prodotto_id'])
<div>
    @if($malSol)
    <p>malfunzionamento : {{$malSol->mal}}</p>
    <p>soluzione : {{$malSol->sol}}</p>

    @can('isTecnicoAzienda')
    <form action="{{route('prodotto.form.aggiorna.malsol', $malSol->id)}}" method="POST">
        <button type="submit">Aggiorna</button>
    </form>
    <form action="{{route('prodotto.cancella.malsol', $malSol->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Cancella</button>
    </form>
    @endcan
    @else
    <p>Dati non disponibili</p>
    @endif
</div>