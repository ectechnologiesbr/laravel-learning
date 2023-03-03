<form action="{{ $action }}" method="post" class="
            d-flex flex-column justify-content-around align-items-center gap-2
            border border-success border-3 rounded-2
            w-100
            px-2
            ">
    @csrf

    @if($update) @method('PUT') @endif

    <h2 class="text-success pt-3 pb-4">{{ $title }}</h2>

    <div class="d-flex flex-column align-items-start gap-2 w-100">
        <label for="titulo" class="ms-3 form-label">Titulo</label>
        <input
            class="form-control"
            type="text"
            placeholder="Digite o titulo"
            name="titulo"
            id="titulo"
            @isset($titulo)value="{{ trim($titulo) }}"@endisset
        >
    </div>

    <div class="
                d-flex flex-column align-items-start gap-2
                w-100
                ">
        <label for="nivel" class="ms-3 form-label">Nivel</label>
        <select
            name="nivel"
            class="form-select"
            id="nivel"
        >
            <option value="basico"s>Basico</option>
            <option value="intermediario">Intermediário</option>
            <option value="avancado">Avançado</option>
        </select>
    </div>

    <div class="
                d-flex flex-column align-items-start gap-2
                w-100
                ">
        <label for="descricao" class="ms-3 form-label">Descrição</label>
        <textarea
            id="descricao"
            class="form-control"
            name="descricao"
            cols="30"
            rows="10"
            placeholder="Digite sua anotação"
            style="resize: none"
        >@isset($descricao){{ trim($descricao) }}@endisset</textarea>
    </div>

    <button type="submit" class="
                btn btn-info btn-lg
                my-3
                ">Registrar</button>
</form>
