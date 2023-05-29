<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('comics', ComicController::class);
