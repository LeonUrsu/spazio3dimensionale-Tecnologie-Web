<div>
    @guest
    <form action="{{route('login')}}" method=GET>
        @csrf
        <button type="submit">Login</button>
    </form>
    @endguest
    @auth
    <form action="{{route('logout')}}" method=POST>
        @csrf
        <button type="submit">Logout</button>
    </form>
    @endauth
    <form action="{{route('centro.lista')}}" method=GET>
        @csrf
        <button type="submit">Centri disponibili</button>
    </form>
    <form action="{{route('prodotto.lista')}}" method=GET>
        @csrf
        <button type="submit">Catalogo prodotti</button>
    </form>
</div>



