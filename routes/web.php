<?php

use Illuminate\Support\Facades\Route;






Route::get('/', 'App\Http\Controllers\EmailController@index'); 

Route::get('/reset', 'App\Http\Controllers\EmailController@reset'); 

Route::get('/register', 'App\Http\Controllers\EmailController@register'); 

Route::get('/approve', 'App\Http\Controllers\EmailController@approve'); 

Route::get('/shortlist', 'App\Http\Controllers\EmailController@shortlist');

Route::get('/interview', 'App\Http\Controllers\EmailController@interview');

Route::get('/selected', 'App\Http\Controllers\EmailController@selected');

Route::get('/received', 'App\Http\Controllers\EmailController@received');

Route::get('/announce', 'App\Http\Controllers\EmailController@announce');