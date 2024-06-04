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

Route::middleware('guest')->
    group(function (){
        Route::get('login',function (){
            return view('auth.auth');
        })->name('auth');
        Route::post('login','\App\Http\Controllers\LoginController@login')->name('login');
        Route::get('logout','\App\Http\Controllers\LoginController@logout')->name('logout');
});
