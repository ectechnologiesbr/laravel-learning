<?php

namespace App\Providers;

use App\Repositories\EloquentNotesRepository;
use App\Repositories\NotesRepository;
use Illuminate\Support\ServiceProvider;

class NotesRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
      NotesRepository::class => EloquentNotesRepository::class,
    ];
}
