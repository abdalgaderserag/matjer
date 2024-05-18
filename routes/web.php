<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('\App\Http\Controllers')->
    group(function (){
    Route::apiResource('item','ItemController');
    Route::apiResource('order', 'OrderController');
});
