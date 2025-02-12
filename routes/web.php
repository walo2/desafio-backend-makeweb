<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', \App\Livewire\Web\Home::class)->name('home');
Route::get('/cadastrar', \App\Livewire\Web\CreateFilm::class)->name('create');
Route::get('/ver', \App\Livewire\Web\ViewFilm::class)->name('see');

//Depois substituir no de cima
Route::get(uri: '/filmes', action: [FilmController::class, 'index'])->name('films.index');

