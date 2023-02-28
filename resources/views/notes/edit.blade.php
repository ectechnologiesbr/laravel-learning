<x-layout :title="'Editar Anotação'">
    <x-form
        :action="route('notes.update', $note->id)"
        :update="true"
        :titulo="$note->titulo"
        :descricao="$note->descricao"
    />
</x-layout>
