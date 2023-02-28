<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotesFormRequest;
use App\Models\Notes;
use App\Repositories\NotesRepository;

class NotesController
{
    public function __construct(private NotesRepository $repository)
    {

    }
    public function index()
    {
        $notes = Notes::all();

        return view('notes.index')->with('notes', $notes);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(NotesFormRequest $request)
    {
        $this->repository->add($request);

        return to_route('notes.index');
    }

    public function destroy(Notes $note)
    {

        $note->delete();

        return to_route('notes.index');
    }

    public function edit(Notes $note)
    {
        return view('notes.edit')->with('note', $note);
    }

    public function update(Notes $note, NotesFormRequest $request)
    {
        $note->fill($request->all());
        $note->save();

        return to_route('notes.index');
    }

}
