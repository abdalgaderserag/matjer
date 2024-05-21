<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::namespace('\App\Http\Controllers')->
group(function (){
    Route::apiResource('item','ItemController');
    Route::apiResource('order', 'OrderController');
});

Route::get('orderr/{id}',function ($id){
    $item = \App\Models\Item::all()->find($id);
    return response($item);
});



Route::post('login',);
