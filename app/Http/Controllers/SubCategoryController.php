<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::with('category', 'user')->get();
        return response()->json($subCategories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        $subCategory = SubCategory::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'created_by' => Auth::id(),
        ]);

        return response()->json($subCategory);
    }

    public function show($id)
    {
        $subCategory = SubCategory::with('category', 'user', 'policies')->findOrFail($id);
        return response()->json($subCategory);
    }

    public function update(Request $request, $id)
    {
        $subCategory = SubCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        $subCategory->update($request->only('name', 'category_id', 'description'));

        return response()->json($subCategory);
    }

    public function destroy($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();
        return response()->json(['message' => 'SubCategory deleted successfully']);
    }
}
