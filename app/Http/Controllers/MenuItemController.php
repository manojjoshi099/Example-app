<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    public function index()
    {
    //     // $menuItems = MenuItem::all();
    //     $pizzas = MenuItem::where('type', 'Pizza')->get();
    //     $burgers = MenuItem::where('type', 'Burger')->get();
    //     $drinks = MenuItem::where('type', 'Drink')->get();
    //     $sandwiches = MenuItem::where('type', 'Sandwich')->get();

    // return view('admin.menu_items', compact('pizzas','burgers', 'drinks', 'sandwiches'));
    //     // return view('admin.menu_items', compact('menuItems'));
    $menuItems = MenuItem::all(); // Fetch all items
    $pizzas = MenuItem::where('type', 'Pizza')->get();
    $burgers = MenuItem::where('type', 'Burger')->get();
    $drinks = MenuItem::where('type', 'Drink')->get();
    $sandwiches = MenuItem::where('type', 'Sandwich')->get();
    $starters = MenuItem::where('type', 'Starter')->get(); // Add if needed
    $mainCourses = MenuItem::where('type', 'Main Course')->get(); // Add if needed

    return view('admin.menu_items', compact(
        'menuItems', // Pass $menuItems to Blade
        'pizzas',
        'burgers',
        'drinks',
        'sandwiches',
        'starters',
        'mainCourses'
    ));
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
