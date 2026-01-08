<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('App\Http\Controllers')->group(function (){
    Route::get('/','HomeController@home')->name('home');
});

Route::namespace('App\Http\Controllers')->group(function (){
    Route::get('/about','HomeController@about')->name('about');
});
