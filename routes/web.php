<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index');
Route::post('/create','HomeController@store')->name('create');

