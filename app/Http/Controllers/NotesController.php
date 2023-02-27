<?php

namespace App\Http\Controllers;

use App\Models\Notes;

class NotesController
{
    public function index()
    {
        $notes = Notes::all();

        return view('notes.index')->with('notes', $notes);
    }
}
