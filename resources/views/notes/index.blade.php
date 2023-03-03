<x-layout title="Anotações">

    <x-header/>

    <main class="
    w-75
    d-flex align-self-center justify-content-between gap-4
    ">
        <section class="
        d-flex flex-column align-items-center
        w-auto
        ">
            <x-form
                :action="route('notes.store')"
                :button="'Criar'"
                :update="false"
                :title="'Registrar Anotação'"
            />
        </section>

        <div class="mt-4 d-flex flex-column gap-5 w-75">

            <x-form_filtro_nivel :action="route('notes.index')"/>

            <section class="
            d-flex flex-column align-items-center
            w-100
            ">
                <h3 class="
            text-success
            fs-1 text-uppercase
            pt-2 pb-3
            ">Sua anotações</h3>
                <ul class="
            list-group list-group-flush
            w-100
            h-50
            overflow-scroll
            ">
                    @foreach($notes as $note)
                        <li class="
                d-flex justify-content-between align-items-center
                list-group-item
                w-100
                ">
                            <div class="
                    d-flex flex-column gap-2 justify-content-start align-items-start
                    ">
                                <h3 class="
                        text-success text-decoration-underline fw-bold t
                        "><?php echo $note->titulo; ?></h3>
                                @if($note->nivel === "basico")
                                    <span class="text-black bg-success p-1 rounded-3">{{$note->nivel}}</span>
                                @elseif($note->nivel === "intermediario")
                                    <span class="text-black bg-warning p-1 rounded-3">{{$note->nivel}}</span>
                                @else
                                    <span class="text-black bg-danger p-1 rounded-3">{{$note->nivel}}</span>
                                @endif
                                <p class="
                        text-wrap text-break
                        ">
                                        <?php echo $note->descricao; ?>
                                </p>
                            </div>
                            <div class="
                    ms-3
                    d-flex flex-column gap-3
                    ">
                                <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-info">Editar</a>

                                <form action="{{ route('notes.destroy', $note->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>

        </div>



    </main>
</x-layout>
