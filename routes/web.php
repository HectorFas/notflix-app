<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;
use App\Models\Film;
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
    return view('welcome');
});

Route::get('/fav', function () {
    return "favorurrrrites";
});

Route::get('/dashboard', [Controller::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/films/favourite', [FilmController::class, 'favourite'])->name('films.favourite');
Route::get('/films/ponerfav/{filmid}', [FilmController::class, 'ponerfav'])->name('films.ponerfav');
Route::get('/films/search', [FilmController::class, 'search'])->name('film.search');
Route::resource('films', FilmController::class);

require __DIR__.'/auth.php';
