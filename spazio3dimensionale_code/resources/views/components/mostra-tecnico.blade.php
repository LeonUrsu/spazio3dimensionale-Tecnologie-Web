@props(['tecnico', 'rottaMostraTecnico', 'rottaCancellaTecnico', 'rottaFormAggiornaTecnico', 'nomeCentro', 'specializzazione'])
<div>
    <div>
        {{ Breadcrumbs::render($rottaMostraTecnico, $tecnico) }}
    </div>
    <h4>nome : {{$tecnico->nome}}</h4>
    <h4>cognome : {{$tecnico->cognome}}</h4>
    <h4>data di nascita : {{$tecnico->data_di_nascita}}</h4>
    @if(!empty($nomeCentro))
    <h4>Centro assistenza: {{$nomeCentro}}</h4>
    @endif
    @if(!empty($tecnico->specializzazione))
    <h4>Specializzazione: {{$tecnico->specializzazione}}</h4>
    @endif
    <div class="button-vicini">
        <form action="{{route($rottaFormAggiornaTecnico, $tecnico->id)}}" method="GET">
            <button type="submit">aggiorna</button>
        </form>
        <form action="{{route($rottaCancellaTecnico, $tecnico->id)}}" method="POST" onsubmit="return confirm('Eliminare il tecnico?')">
            @method('DELETE')
            <button type="submit">elimina</button>
        </form>
    </div>
</div>