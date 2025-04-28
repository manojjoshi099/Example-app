<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    public function index()
    {
        // Fetch all menu items for the main table
        $menuItems = MenuItem::all();
        
        // Fetch categorized items
        $categories = [
            'pizzas' => MenuItem::where('type', 'Pizza')->get(),
            'burgers' => MenuItem::where('type', 'Burger')->get(),
            'Drinks' => MenuItem::where('type', 'Drink')->get(),
            'starters' => MenuItem::where('type', 'Starter')->get(),
            'mainCourses' => MenuItem::where('type', 'Main Course')->get(),
            'Desserts' => MenuItem::where('type', 'Dessert')->get()
        ];

        return view('admin.menu_items', array_merge(
            ['menuItems' => $menuItems],
            $categories
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable',
        ]);

        $menuItem = MenuItem::create($request->only('name', 'type', 'description', 'price'));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menu-items', 'public');
            $menuItem->update(['image' => $path]);
        }

        return redirect()->route('admin.menu_items.index')->with('success', 'Item added!');
    }

    public function edit(MenuItem $menuItem)
    {
        return view('admin.menu_items', [
            'editItem' => $menuItem,
            'menuItems' => MenuItem::all(),
            'pizzas' => MenuItem::where('type', 'Pizza')->get(),
            'burgers' => MenuItem::where('type', 'Burger')->get(),
            'drinks' => MenuItem::where('type', 'Drink')->get(),
            'mainCourse'=> MenuItem::where('type','Main Course')->get(),
            'Deserts'=> MenuItem::where('type','Desert')->get(),
            'starters' => MenuItem::where('type', 'Starter')->get(),
            'mainCourses' => MenuItem::where('type', 'Main Course')->get(),
            'desserts' => MenuItem::where('type', 'Dessert')->get()
        ]);
    }

    public function update(Request $request, MenuItem $menuItem)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $menuItem->update($request->only('name', 'type', 'description', 'price'));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menu-items', 'public');
            $menuItem->update(['image' => $path]);
        }

        return redirect()->route('admin.menu_items.index')->with('success', 'Item updated!');
    }

    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();
        return redirect()->route('admin.menu_items.index')->with('success', 'Item deleted!');
    }
}