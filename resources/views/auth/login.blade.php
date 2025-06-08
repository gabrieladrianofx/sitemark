<div>
    <h1>Login</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <input name="email" placeholder="Digite seu e-mail">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <input type="password" name="password" placeholder="Insira sua senha">
        @error('password')
            <span>{{ $message }}</span>
        @enderror

        <button>Acessar conta</button>
    </form>
</div>
