{{--//TODO mettere un metodo automatico che calcola la data dopo l'esame e mostra le credenziali di accesso per gli utenti oppure cambiare le credenziali e metterle nella finestra del login
    in modo che tutti possono accedere al sito--}}
{{--//TODO dopo l'esame riguardare e rimuovere tutte le informazioni sensibili dall'applicativo--}}
{{--//TODO se c'è tempo cambaire il onsubmit std del browser e metterlo personalizzato --}}
<main>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <form action="{{route('home')}}" class="annulla_left">
        <button type="submit">Annulla</button>
    </form>
    <div class="login-container">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="login">
                <h2>Login</h2>
                <div>
                    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" style="width: 100%;">

                </div>
                <div>
                    <input type="password" name="password" placeholder="Password" style="width: 100%;">

                </div>
                @error('username')
                <span class="error-message">{{ $message }}</span>
                @enderror
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
                <button type="submit" style="width: 100%;"> Accedi </button>
            </div>
        </form>
    </div>
</main>