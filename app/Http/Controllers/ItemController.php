<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     *
     */
    public function main()
    {
        $items = Item::all();
        $user = Auth::user();
        $token = $user->createToken($user['name'] . '-AuthToken')->plainTextToken;
        return view('item.index')->with(['items' => $items,'token' => $token]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response(Item::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $item = new Item($request->except(['_token']));
        $item->save();
        return \response($item);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return \response($item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->except('_token'));
        return \response($item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return \response('item have been removed!');
    }
}
