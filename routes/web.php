<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('items',function (){
    $items = \App\Models\Item::all();
    return view('item.index')->with('items',$items);
});

Route::get('auth',function (){
    return view('auth.auth');
});
