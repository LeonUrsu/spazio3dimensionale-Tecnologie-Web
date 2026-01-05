<x-base>
    <x-form-tecnico rotta="tecnico.centro.aggiorna" metodo='PUT' :$tecnico>
        <x-form-tecnico-centro :$centri :$tecnico />
    </x-form-tecnico>
</x-base>