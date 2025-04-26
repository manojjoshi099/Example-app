<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all();
        return view('admin.menu_items', compact('menuItems'));
    }

    public function store(Request $request)
    {
        MenuItem::create($request->all());
        return redirect()->route('menu-items.index')->with('success', 'Menu item added!');
    }

    public function edit(MenuItem $menuItem)
    {
        $menuItems = MenuItem::all();
        return view('admin.menu_items', ['menuItems' => $menuItems, 'editItem' => $menuItem]);
    }

    public function update(Request $request, MenuItem $menuItem)
    {
        $menuItem->update($request->all());
        return redirect()->route('menu-items.index')->with('success', 'Menu item updated!');
    }

    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();
        return redirect()->route('menu-items.index')->with('success', 'Menu item deleted!');
    }

    public function show(MenuItem $menuItem)
    {
        return view('admin.menu_items', ['menuItem' => $menuItem]);
    }
}
