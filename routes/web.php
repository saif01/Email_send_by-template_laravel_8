<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\sentMailController@index')->name('home');

Route::post('/sentMail', 'App\Http\Controllers\sentMailController@store')->name('sentMail');

Route::get('/check-mail', 'App\Http\Controllers\sentMailController@checkMail');


