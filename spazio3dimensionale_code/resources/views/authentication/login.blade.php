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