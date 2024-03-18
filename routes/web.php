<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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
    return view('home');
})->name('home');

//rotta lista comics
Route::get('/comics', [ComicController::class, 'index'] )->name('comics.index');

//rotta creazione comic
Route::get('/comics/create', [ComicController::class, 'create']  )->name('comics.create');

//rotta mostra singolo comic
Route::get('/comics/{comic}', [ComicController::class, 'show']  )->name('comics.show');

//rotta modifica singolo comic
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit']  )->name('comics.edit');




//rotta salvataggio nuovo comic
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//rotta per salvataggio su db delle modifiche
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

//rotta per eliminare un comic
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');





Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');