<div>
    <h1>Login</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <input name="email" placeholder="Digite seu e-mail">
        <input type="password" name="password" placeholder="Insira sua senha">

        <button>Acessar conta</button>
    </form>
</div>
