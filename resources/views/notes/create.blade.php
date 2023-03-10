<x-layout title="Adicionar Anotação">

    <x-header/>

    <main class="
    w-75
    d-flex align-self-center justify-content-between gap-4
    ">
        <section class="
        d-flex flex-column align-items-center
        w-auto
        ">
            <form action="{{ route('notes.store') }}" method="post" class="
            d-flex flex-column justify-content-around align-items-center
            border border-success border-3
            w-100
            px-2
            ">
                @csrf

                <h2 class="
                text-success
                pt-3 pb-4
                ">Criar Anotação</h2>
                <div class="
                d-flex flex-column align-items-start gap-2
                w-100
                ">
                    <label for="" class="ms-3 form-label">Titulo</label>
                    <input class="form-control" type="text" placeholder="Digite o titulo" name="titulo">
                </div>

                <div class="
                d-flex flex-column align-items-start gap-2
                w-100
                ">
                    <label for="" class="ms-3 form-label">Nivel</label>
                    <select name="nivel" class="form-select">
                        <option value="basico">Basico</option>
                        <option value="intermediario">Intermediário</option>
                        <option value="avancado">Avançado</option>
                    </select>
                </div>

                <div class="
                d-flex flex-column align-items-start gap-2
                w-100
                ">
                    <label for="" class="ms-3 form-label">Descrição</label>
                    <textarea
                        class="form-control"
                        name="descricao"
                        cols="30"
                        rows="10"
                        placeholder="Digite sua anotação"
                        style="resize: none"
                    ></textarea>
                </div>

                <button type="submit" class="
                btn btn-info btn-lg
                my-3
                ">Registrar</button>
            </form>
        </section>
    </main>
</x-layout>
