<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/home', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/companies', [App\Http\Controllers\PagesController::class, 'companies'])->name('companies');

Auth::routes();
