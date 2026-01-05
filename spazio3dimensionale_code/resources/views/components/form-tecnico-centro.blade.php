{{--Questo componente è la parte che farà scegliere al admin gli id de centri a cui assegnare il tecnico centro--}}
{{--//TODO bisogna saper spiegare ogni parte di questo file--}}
@props(['centri' => [],'tecnico' => null])
<div>
    <div class="scroll-box-container" style="margin: 15px 0;">
        <label style="font-weight: bold; display: block; margin-bottom: 8px;">
            Seleziona Centro Operativo
        </label>

        <div style="height: 160px; overflow-y: scroll; border: 1px solid #ccc; border-radius: 4px; padding: 8px; background-color: #ffffff;">
            @foreach($centri as $centro)
            <div style="display: flex; align-items: center; padding: 6px; border-bottom: 1px solid #f0f0f0;">

                {{-- Casella da spuntare (Radio per scelta singola) --}}
                <input type="radio"
                    name="centro_id"
                    id="centro_{{ $centro->id }}"
                    value="{{ $centro->id }}" {{ old('centro_id', $tecnico?->centro_id) == $centro->id ? 'checked' : '' }}
                    style="cursor: pointer; margin-right: 12px;">

                <label for="centro_{{ $centro->id }}" style="cursor: pointer; flex-grow: 1; font-family: sans-serif; font-size: 0.95rem;">
                    <span style="font-weight: 500; color: #333;">{{ $centro->nome }}</span>
                    <span style="color: #888; font-size: 0.8rem; margin-left: 8px;">(ID: {{ $centro->id }})</span>
                </label>

            </div>
            @endforeach

            @if(count($centri) === 0)
            <p style="color: #999; font-style: italic; font-size: 0.9rem;">Nessun centro disponibile.</p>
            @endif
        </div>

        @error('centro_id')
        <span style="color: #dc3545; font-size: 0.8rem; margin-top: 4px; display: block;">{{ $message }}</span>
        @enderror
    </div>
</div>