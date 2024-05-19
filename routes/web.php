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

Route::get('items',function (){
    return view('item.index')->with('items',\App\Models\Item::all());
});
