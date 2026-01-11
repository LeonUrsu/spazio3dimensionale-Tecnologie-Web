@props(['rotta', 'tecnico' => null, 'metodo' => 'POST', 'indietro'])
<div>
    <form action="{{route($rotta, $tecnico?->id)}}" method="POST" class="element_with_button_column" class="form-conferma">
        @csrf
        @if($metodo == 'PUT') @method('PUT') @endif {{--put per gli aggiornamenti laravel--}}
        @if ($errors->any())
        <div class="alert-error-summary" style="color: red">
            <strong>Attenzione:</strong> Ci sono degli errori nei dati inseriti.
            Controlla i campi evidenziati.
        </div>
        @endif
        <input type="text" name="nome" placeholder="nome" value="{{ old('nome', $tecnico?->nome) }}" class="@error('nome') is-invalid @enderror">
        <input type="text" name="cognome" placeholder="cognome" value="{{ old('cognome', $tecnico?->cognome) }}" class="@error('cognome') is-invalid @enderror">
       
        <input type="text" name="username" placeholder="username" value="{{ old('username', $tecnico?->username) }}" class="@error('username') is-invalid @enderror">
        <input type="password" name="password" placeholder="password (lascia vuota per non cambiare)" class="@error('password') is-invalid @enderror">
        {{$slot}}
        <button type="submit">Salva</button>

    </form>
    <form action={{$indietro}}>
        <button type="submit">Annulla</button>
    </form>
</div>