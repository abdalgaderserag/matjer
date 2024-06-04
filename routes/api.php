<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request;
});

Route::namespace('\App\Http\Controllers')->
group(function (){
    Route::apiResource('item','ItemController');
    Route::apiResource('order', 'OrderController');
    Route::post('add_to_cart/{id}','CartController@store');
})->middleware('auth:sanctum');


