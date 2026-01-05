@props(['rotta', 'tecnico' => null,'metodo' => 'POST'])
<div>
    <form action="{{route($rotta, $tecnico?->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler salvare le modifiche?')">
        @csrf
        @if($metodo == 'PUT') @method('PUT') @endif {{--put per gli aggiornamenti laravel--}}
        <input type="text" name="nome" placeholder="nome" value="{{ old('nome', $tecnico?->nome) }}">
        <input type="text" name="cognome" placeholder="cognome" value="{{ old('cognome', $tecnico?->cognome) }}">
        <input type="text" name="data_di_nascita" placeholder="data di nascita" value="{{ old('data_di_nascita', $tecnico?->data_di_nascita) }}">
        <input type="text" name="email" placeholder="email" value="{{ old('email', $tecnico?->email) }}">
        <input type="text" name="username" placeholder="username" value="{{ old('username', $tecnico?->username) }}">
        <input type="password" name="password" placeholder="password (lascia vuota per non cambiare)"> 
        {{$slot}}
        <button type="submit">Salva</button>
    </form>
    <a href="{{ url()->previous() }}">
        <button type="button">Annulla</button>
    </a>
</div>