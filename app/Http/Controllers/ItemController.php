<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Title;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Item::create([
            'name'=>$request->item_name,
            'title_id'=>$request->title_id,
            'desc'=>$request->item_desc,
            'price'=>$request->item_price
        ]);
        return redirect()->route('menu.show',Title::find($request->title_id)->menu_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $menu_id = Title::find($item->title_id)->menu_id;
        $item->delete();

        return redirect()->route('menu.show',$menu_id);
    }
}
