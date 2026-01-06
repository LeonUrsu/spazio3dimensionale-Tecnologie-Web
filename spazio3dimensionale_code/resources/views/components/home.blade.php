    <div>
        {{ Breadcrumbs::render() }}
        @guest
        <form action="{{route('login')}}" method=GET>
            @csrf
            <button type="submit">Login</button>
        </form>
        @endguest
        @auth
        <form action="{{route('logout')}}" method=POST onsubmit="return confirm('Sei sicuro di voler procedere con il logout?')">
            @csrf
            <button type="submit">Logout</button>
        </form>
        @endauth
        <form action="{{route('centro.lista')}}" method=GET>
            @csrf
            <button type="submit">Centri Disponibili</button>
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
    </div>