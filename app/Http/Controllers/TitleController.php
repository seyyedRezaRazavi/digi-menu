<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = Title::create([
            'name'=>$request->title_name,
            'menu_id'=>$request->menu_id
        ]);

        return redirect()->route('menu.show',$request->menu_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Title $title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Title $title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Title $title)
    {
        $title->name = $request->title_name_edit;
        $title->save();

        return redirect()->route('menu.show',$title->menu_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Title $title)
    {
        $menu_id = $title->menu_id;
        $title->delete();
        return redirect()->route('menu.show',$menu_id);

    }
}
