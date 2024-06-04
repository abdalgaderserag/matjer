<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth:sanctum')->namespace('\App\Http\Controllers')->
group(function (){
    Route::get('items','ItemController@main')->name('items');
    Route::get('logout','LoginController@logout')->name('logout');
});

Route::middleware('guest:sanctum')->namespace('\App\Http\Controllers')->
    group(function (){

        Route::get('login',function (){
            return view('auth.auth');
        })->name('auth');
        Route::post('login','LoginController@login')->name('login');
        Route::post('register', 'RegisterController@register')->name('register');
});

