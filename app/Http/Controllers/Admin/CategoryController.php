<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    // List all categories with pagination
    public function index()
    {
        $categories = Category::with('creator')->paginate(10); // Fetch with pagination
        return view('admin.category.index', compact('categories'));
    }

    // Show form to create a category
    public function create()
    {
        return view('admin.category.create');
    }

    // Store a new category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'slug' => 'required|unique:categories',
            'status' => 'required|boolean',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully.');
    }

    // Show form to edit a category
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    // Update an existing category
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $id,
            'slug' => 'required|unique:categories,slug,' . $id,
            'status' => 'required|boolean',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
    }

    // Delete a category
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
    }
}
