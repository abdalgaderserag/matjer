<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request, $id)
    {
        $cart = new Cart([
                'item_id'=>$id,
                'count'=>$request['count']]
        );
        $cart->save();
        return response(1);
    }
}
