<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/view/pokemon/{pokemon}', [HomeController::class, 'viewPokemon'])
	->middleware('auth')->name('view.pokemon');
