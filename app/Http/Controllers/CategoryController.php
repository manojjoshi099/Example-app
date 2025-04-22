<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    // Show all categories and the form
    public function index()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    // Store new category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable',
        ]);

        if($request ->file('image')){
            $path=Storage::putFile('images', $request->file('image'));
        }

        $data = $request->only('name', 'description', 'price');

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('images', 'public'); // Save image to public disk
        }
        
        Category::create($data);
        return redirect()->route('categories.index')->with('success', 'Category added!');
    }

    // Edit existing category (load data into same page)
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.category', compact('categories', 'category'));
    }

    // Update category
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable', // Validate image  

        ]);

        $data = $request->only('name', 'description', 'price');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }
    
            // Store new image
            $data['image'] = $request->file('image')->store('images', 'public');
        }    

            // if ($request->file('image')) {
            //     $data['image'] = $request->file('image')->store('images', 'public');
            // }

        $category->update($data);
        return redirect()->route('categories.index')->with('success', 'Category updated!');
    }

    // Delete category
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted!');
    }

    public function show(Category $category)
    {
        return view('admin.category', compact('category'));
    }
}
