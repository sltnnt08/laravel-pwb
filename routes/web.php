<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TestController,
    TestLagiController,
    MovieController,
    GenreController,
};

Route::get('/iniagan', function () {
    return view('agan');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/2', function () {
    return view('index2');
});
Route::get('/form',[TestController::class, 'form']);
Route::get('/welcome', [TestController::class, 'welcome']);

// route buat nambahin genre
// handler = create
//PER GENRE-GENRE AN
Route::controller(GenreController::class)->group(function () {
    Route::get('/genre', 'index')->name('genre.index');
    Route::get('/genre/create', 'create')->name('genre.create');
    Route::post('/genre', 'store')->name('genre.store');
    Route::get('/genre/{id}/edit', 'edit')->name('genre.edit');
    Route::put('/genre/{id}', 'update')->name('genre.update');
    Route::delete('/genre/{id}', 'destroy')->name('genre.destroy');
});



