<x-layout title="Login">
    <main class="
    w-100 vh-100
    d-flex flex-column justify-content-center align-items-center
    ">
        <h1 class="
        fs-1 fw-bold text-success
        mb-4
        ">Login</h1>
        <form method="post" class="w-25 d-flex flex-column">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <button class="
            btn btn-info
            mt-3
            align-self-center
            w-100
            ">
                Entrar
            </button>
            <span class="mt-2 align-self-center">Não possue conta? <a class="text-decoration-none fw-semibold text-info" href="{{route('users.create')}}">Cadastre-se</a></span>
        </form>
    </main>


</x-layout>
