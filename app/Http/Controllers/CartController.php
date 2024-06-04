<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(StoreCartRequest $request)
    {
        $cart = new Cart([
                'item_id'=>$request['item_id'],
                'count'=>$request['count']]
        );

        $cart->save();
        return response(1);
    }
}
