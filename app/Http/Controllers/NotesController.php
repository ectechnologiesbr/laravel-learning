<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotesFormRequest;
use App\Models\Notes;
use App\Models\User;
use App\Repositories\NotesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController
{
    public function __construct(private NotesRepository $repository)
    {

    }
    public function index(Request $request)
    {

        $user = Auth::user();
        $notes = Notes::where('user_id', $user->id);

        $nivel_list = $request->nivel_list;

        if($nivel_list){
            $notes->where('nivel', $nivel_list);
        }

        $notes = $notes->get();

        return view('notes.index')->with('notes', $notes)->with('nivel_list', $nivel_list);
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
