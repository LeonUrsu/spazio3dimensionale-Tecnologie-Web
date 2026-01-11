<!DOCTYPE html>
<html>

<head>
    <title>Spazio3Dimensionale</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="container container-header">
        <div class="logo-container">
            <a href="/">
                <img src="{{ asset('images/logo_spazio3Dimensionale.png') }}" alt="Logo Spazio3D" class="site-logo">
            </a>
        </div>
        <div class="menu-box">
            <form action="{{route('centro.lista')}}" method=GET>
                @csrf
                <button class="menu-button" type="submit">Centri Assistenza</button>
            </form>

            <form action="{{route('prodotto.lista')}}" method=GET>
                @csrf
                <button type="submit">Catalogo Prodotti</button>
            </form>

            @can('isAdmin')
            <form action="{{route('tecnico.centro.lista')}}" method=GET>
                <button type="submit">Vedi Tecnici Centri</button>
            </form>
            <form action="{{route('tecnico.azienda.lista')}}" method=GET>
                <button type="submit">Vedi Tecnici Azienda</button>
            </form>
            @endcan

            @guest
            <form action="{{route('login')}}" method=GET>
                @csrf
                <button type="submit">Login</button>
            </form>
            @endguest

            @auth
            <form action="{{route('logout')}}" method=POST class="form-conferma">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @endauth
        </div>
    </header>


    <main class="container container-main">
        {{ $slot }}
    </main>

    <footer class="container footer-container">
        <p> <strong>Chiamaci a:</strong> {{ config('azienda.telefono') }} </p>
        <p> Scrivici a: {{ config('azienda.email') }} </p>
        <p> Vineni a trovarci in: {{ config('azienda.indirizzo') }} </p>
        <p> Orari a: {{ config('azienda.orari') }} </p>
        <p>
            <a href="{{ asset('docs/documentazione_spazio3Dimensionale.pdf') }}" target="_blank" class="docs">Leggi la Documentazione (PDF)</a>
        </p>
        <p>
            <a href="https://github.com/LeonUrsu/spazio3dimensionale-Tecnologie-Web.git" target="_blank" class="docs">Vai al progetto su GitHub</a>
        </p>

        <p> Esame Tecnologie Web Spazio3dimensionale </p>
        <p> Developer a: {{ config('azienda.developer') }} </p>
    </footer>
    <x-modal-conferma />
    <script src="{{ asset('js/conferma.js') }}"></script>
</body>

</html>