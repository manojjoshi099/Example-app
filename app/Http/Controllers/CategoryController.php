<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
        ]);

        Category::create($request->only('name', 'description', 'price'));

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
        ]);

        $category->update($request->only('name', 'description', 'price'));

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
