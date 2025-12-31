@props(['rotta', 'centro'=> null, 'metodo'=>'POST'])
<div>
    <p>
    <form action="{{route($rotta, $centro?->id)}}" method="POST">
        @csrf
        @if($metodo == 'PUT') @method('PUT') @endif
        <input type="text" name="nome" placeholder="nome" value="{{ old('nome', $centro?->nome) }}">
        <input type="text" name="stato" placeholder="stato" value="{{ old('stato', $centro?->stato) }}">
        <input type="text" name="città" placeholder="città" value="{{ old('città', $centro?->città) }}">
        <input type="text" name="cap" placeholder="cap" value="{{ old('cap', $centro?->cap) }}">
        <input type="text" name="via" placeholder="via" value="{{ old('via', $centro?->via) }}">
        <input type="text" name="civico" placeholder="civico" value="{{ old('civico', $centro?->civico) }}">
        <button type="submit">Salva</button>
    </form>
    </p>
    <p>
        <a href="{{ url()->previous() }}">
            <button type="button">Annulla</button>
        </a>
    </p>
</div>