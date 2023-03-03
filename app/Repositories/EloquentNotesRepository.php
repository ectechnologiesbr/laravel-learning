<?php

namespace App\Repositories;

use App\Http\Requests\NotesFormRequest;
use App\Models\Notes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EloquentNotesRepository implements NotesRepository
{
    public function add(NotesFormRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $user = Auth::user();

            $note = [
                'user_id' => $user->id,
                'titulo' => $request->titulo,
                'nivel' => $request->nivel,
                'descricao' => $request->descricao
            ];


            return Notes::insert($note);
        });
    }
}
