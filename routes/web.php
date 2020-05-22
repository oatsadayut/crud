<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('home');
Route::get('/frmUpdate/{id}','HomeController@frmUpdate')->name('frmUpdate');

Route::post('/create','HomeController@store')->name('create');
Route::post('/update','HomeController@update')->name('update');
Route::post('/delete','HomeController@delete')->name('delete');

