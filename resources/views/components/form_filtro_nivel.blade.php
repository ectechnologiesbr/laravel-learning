<section class="w-100">
    <form class="d-flex gap-2 w-100" method="get" action="{{ $action }}">

        <div class="
                d-flex flex-column align-items-start gap-2
                w-50
                ">
            <label for="nivel_list" class="form-label d-none">Nivel</label>
            <select
                name="nivel_list"
                class="form-select"
                id="nivel_list"
            >
                <option value="">__Selecione o nível__</option>
                <option value="basico">Basico</option>
                <option value="intermediario">Intermediário</option>
                <option value="avancado">Avançado</option>
            </select>
        </div>

        <div class="d-flex gap-2 w-50">
            <a href="{{ route('notes.index') }}" class="btn btn-outline-secondary gap-3">Exibir Todos</a>
            <button type="submit" class="btn btn-info w-25">Filtrar</button>
        </div>

    </form>
</section>
