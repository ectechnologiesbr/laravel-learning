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
    return redirect('/login');
});

Route::resource('/notes', \App\Http\Controllers\NotesController::class)
    ->except(['show']);
Route::get('/notes/{nivel?}', [\App\Http\Controllers\NotesController::class, 'index'])->name('notes.index');

Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/register' ,[\App\Http\Controllers\UserController::class, 'store'])->name('users.store');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store'])->name('signin');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'destroy'])->name('logout');

