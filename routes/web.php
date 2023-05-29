<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function(){
    $comics = config('comics');
    return view('comics', $comics);
})->name('comics');

Route::get('/comic/{id}', function ($id) {
    $comics = config('comics');

    if ($id >= 0 && $id < count($comics)) {
        return view('comic.show', $comics[$id]);
    } else {
        abort('404');
    }

})->name('comic.show');

