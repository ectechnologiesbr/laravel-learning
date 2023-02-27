<x-layout title="Cadastro">

    <main class="
    w-100 vh-100
    d-flex flex-column justify-content-center align-items-center
    ">
        <h1 class="
        fs-1 fw-bold text-success
        mb-4
        ">Cadastrar-se</h1>
        <form method="post" class="w-25 d-flex flex-column">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

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
                Registrar
            </button>
        </form>
    </main>
</x-layout>
