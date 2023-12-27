<?php
use App\Http\Controllers\CookiesController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/set-cookie', [CookiesController::class, 'setCookie'])->name('setCookie');
Route::get('/get-cookie', [CookiesController::class, 'getCookie']);
Route::get('/del-cookie', [CookiesController::class, 'delCookie']);