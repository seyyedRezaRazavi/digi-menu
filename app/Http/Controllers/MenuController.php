<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Menu::getAllMenus());
        $menus = Menu::getAllMenus();
        return view('pages.menu_index', compact('menus'));
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
        $menu = Menu::create([
            'name' => $request->menu_name,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('menu.show', $menu->id)->with('message_green', 'منو افزوده شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('pages.menu_show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->name = $request->menu_name;
        $menu->save();
        return redirect()->route('menu.show', $menu->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index');
    }

    public function qrcode_image(Menu $menu)
    {
    
        
        $qrcode =  QrCode::generate(
            $menu->link
        );
        file_put_contents('qrcode.svg', $qrcode);

        return Response::download( 'qrcode.svg', "qrcode.svg");

    }


    public function show_menu_for_user($id)
    {
        $menu_id = base64_decode($id);
        $menu = Menu::findOrFail($menu_id);
        return view('pages.menu_show_user',compact('menu'));
    }
}
