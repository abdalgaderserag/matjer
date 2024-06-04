<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Auth::getUser()->orders();
        return response($orders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $user = Auth::getUser();
        $order = new Order(['user_id'=>Auth::id(),'token'=>csrf_token()]);
        $order->save();
        $carts = $user->carts();
        foreach ($carts as $cart){
            if ($cart->order_id == ''){
                $cart['order_id'] = $order->id;
                $cart->save();
            }
        }
        return response(1);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return response([$order->token,$order->carts()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return 1;
    }
}
