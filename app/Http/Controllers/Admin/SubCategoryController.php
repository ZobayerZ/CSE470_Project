<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::with('category', 'creator')->paginate(10);
        return view('admin.sub_category.index', compact('subCategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.sub_category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:sub_categories|max:255',
            'slug' => 'required|unique:sub_categories',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
        ]);

        SubCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('admin.sub_category.index')->with('success', 'Sub-Category created successfully.');
    }

    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $categories = Category::all();
        return view('admin.sub_category.edit', compact('subCategory', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|unique:sub_categories,name,' . $id,
            'slug' => 'required|unique:sub_categories,slug,' . $id,
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
        ]);

        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update($request->all());

        return redirect()->route('admin.sub_category.index')->with('success', 'Sub-Category updated successfully.');
    }

    public function destroy($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();

        return redirect()->route('admin.sub_category.index')->with('success', 'Sub-Category deleted successfully.');
    }
}
