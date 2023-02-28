<?php

namespace App\Repositories;

use App\Http\Requests\NotesFormRequest;
use App\Models\Notes;

interface NotesRepository
{
    public function add(NotesFormRequest $request): Notes;
}
