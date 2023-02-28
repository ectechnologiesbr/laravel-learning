<?php

namespace App\Repositories;

use App\Http\Requests\NotesFormRequest;
use App\Models\Notes;
use Illuminate\Support\Facades\DB;

class EloquentNotesRepository implements NotesRepository
{
    public function add(NotesFormRequest $request): Notes
    {
        return DB::transaction(function () use ($request) {
           return Notes::create($request->all());
        });
    }
}
