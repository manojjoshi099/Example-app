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
        // Validate data (optional but recommended)
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable',
        ]);

        $menuItem = new MenuItem();
        $menuItem->name = $request->name;
        $menuItem->description = $request->description;
        $menuItem->price = $request->price;

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menu-items', 'public');
            $menuItem->image = $path;
        }

        $menuItem->save();

        return redirect()->route('admin.menu_items.index')->with('success', 'Menu item added!');
    }

    public function edit(MenuItem $menuItem)
    {
        $menuItems = MenuItem::all();
        return view('admin.menu_items', ['menuItems' => $menuItems, 'editItem' => $menuItem]);
    }

    public function update(Request $request, MenuItem $menuItem)
    {
        // Validate data
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $menuItem->name = $request->name;
        $menuItem->description = $request->description;
        $menuItem->price = $request->price;

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menu-items', 'public');
            $menuItem->image = $path;
        }

        $menuItem->save();

        return redirect()->route('admin.menu_items.index')->with('success', 'Menu item updated!');
    }

    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();
        return redirect()->route('admin.menu_items.index')->with('success', 'Menu item deleted!');
    }

    public function show(MenuItem $menuItem)
    {
        return view('admin.menu_items', ['menuItem' => $menuItem]);
    }
}
