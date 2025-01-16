<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TestController,
    TestLagiController
};

Route::get('/', function () {
    return view('index');
});
Route::get('/iniagan', function () {
    return view('agan');
});
Route::get('/2', function () {
    return view('index2');
});
// Route::get('/form', function () {
//     return view('form');
// });
// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/form',[TestController::class, 'form']);
Route::get('/welcome', [TestController::class, 'welcome']);