@props(['rotta', 'centro'=> null, 'metodo'=>'POST'])
<div>
    <p>
    <form action="{{ $centro ? route($rotta, $centro->id) : route($rotta) }}" method="POST" class="form-conferma"> @csrf
        @if($metodo == 'PUT') @method('PUT') @endif
        <div class="element_with_button_column">
            <div>
                <input type="text" name="nome" placeholder="nome" value="{{ old('nome', $centro?->nome) }}" class="@error('nome') is-invalid @enderror">
                <label for="marca">nome:</label>
            </div>
            <div>
                <input type="text" name="stato" placeholder="stato" value="{{ old('stato', $centro?->stato) }}" class="@error('stato') is-invalid @enderror">
                <label for="marca">stato:</label>
            </div>
            <div>
                <input type="text" name="città" placeholder="città" value="{{ old('città', $centro?->città) }}" class="@error('città') is-invalid @enderror">
                <label for="marca">città:</label>
            </div>
            <div>
                <input type="text" name="cap" placeholder="cap" value="{{ old('cap', $centro?->cap) }}" class="@error('cap') is-invalid @enderror">
                <label for="marca">cap:</label>
            </div>
            <div>
                <input type="text" name="via" placeholder="via" value="{{ old('via', $centro?->via) }}" class="@error('via') is-invalid @enderror">
                <label for="marca">via:</label>
            </div>
            <div>
                <input type="text" name="civico" placeholder="civico" value="{{ old('civico', $centro?->civico) }}" class="@error('civico') is-invalid @enderror">
                <label for="marca">civico:</label>
            </div>
            <button type="submit">Salva</button>
        </div>
    </form>
    </p>
    <p>
        <a href="{{ url()->previous() }}">
            <button type="button">Annulla</button>
        </a>
    </p>
</div>