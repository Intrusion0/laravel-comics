<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('actionComics', function () {
    return view('pages.action-comics');
})->name('actionComics');
