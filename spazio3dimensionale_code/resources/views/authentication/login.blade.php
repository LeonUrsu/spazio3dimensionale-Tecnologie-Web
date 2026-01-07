{{--//TODO mettere un metodo automatico che calcola la data dopo l'esame e mostra le credenziali di accesso per gli utenti oppure cambiare le credenziali e metterle nella finestra del login
    in modo che tutti possono accedere al sito--}}
{{--//TODO dopo l'esame riguardare e rimuovere tutte le informazioni sensibili dall'applicativo--}}
{{--fare il ritorno con colore rosso su form e login--}}
{{--//TODO se c'è tempo cambaire il onsubmit std del browser e metterlo personalizzato --}}
<div>
    <div class="container">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="formbox" id="login-form">
                <h2>Login</h2>
                <input type="text" name="username" placeholder="username">
                <input type="text" name="password" placeholder="password">
                <button type="submit"> Accedi </button>
            </div>
        </form>
    </div>
</div>