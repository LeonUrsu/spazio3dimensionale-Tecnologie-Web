@props(['tecnico'])
<x-base>
    <x-mostra-tecnico :$tecnico rottaCancellaTecnico="tecnico.azienda.cancella" rottaFormAggiornaTecnico="tecnico.azienda.form.aggiorna"/>
</x-base>   