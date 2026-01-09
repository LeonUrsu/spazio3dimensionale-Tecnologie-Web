@props(['tecnico'])
<x-base>
    <x-mostra-tecnico :$tecnico rottaMostraTecnico="tecnico.centro.mostra" rottaCancellaTecnico="tecnico.centro.cancella" rottaFormAggiornaTecnico="tecnico.centro.form.aggiorna" :$nomeCentro/>
    {{--mostrare anche il centro del tecnico--}}
</x-base>