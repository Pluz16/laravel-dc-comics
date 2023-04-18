<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/', function () {
    return redirect()->route('comics.index');
});

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');


Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');
Route::delete('/comics/{comic}', 'ComicController@destroy')->name('comics.destroy');

