<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/notes');
});

Route::resource('/notes', \App\Http\Controllers\NotesController::class);

Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/register' ,[\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
