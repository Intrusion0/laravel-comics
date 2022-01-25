<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')->name('home');

Route::get('actionComics', 'HomeController@actionComics')->name('actionComics');
