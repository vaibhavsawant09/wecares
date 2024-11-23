<?php

namespace App\Http\Controllers;

use App\Models\TicketCategory;
use Illuminate\Http\Request;

class TicketCategoryController extends Controller
{
    public function index()
    {
        $categories = TicketCategory::all();
        return response()->json(['categories' => $categories], 200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'created_by' => 'required|exists:users,id',
        ]);

        $category = TicketCategory::create($request->all());

        return response()->json(['message' => 'Ticket category created successfully', 'category' => $category], 201);
    }
    public function update(Request $request, $id)
    {
        $category = TicketCategory::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'created_by' => 'required|exists:users,id',
        ]);

        $category->update($request->all());

        return response()->json(['message' => 'Category updated successfully', 'category' => $category], 200);
    }
    public function destroy($id)
    {
        $category = TicketCategory::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $category->delete();

        return response()->json(['message' => 'Category deleted successfully'], 200);
    }
}
