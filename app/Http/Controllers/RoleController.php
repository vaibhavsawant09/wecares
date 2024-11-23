<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return response()->json(['roles' => $roles], 200);
    }
    public function create()
    {
        // Return a view for creating a new role (if applicable).
        // For APIs, this method can be omitted.
    }
    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|unique:roles|max:255',
        ]);

        $role = Role::create([
            'role_name' => $request->role_name,
        ]);

        return response()->json(['message' => 'Role created successfully', 'role' => $role], 201);
    }
    public function show($id)
    {
        $role = Role::find($id);

        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }

        return response()->json(['role' => $role], 200);
    }
    public function edit($id)
    {
        // Return a view for editing a role (if applicable).
        // For APIs, this method can be omitted.
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'role_name' => 'required|string|unique:roles,role_name,' . $id . '|max:255',
        ]);

        $role = Role::find($id);

        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }

        $role->update([
            'role_name' => $request->role_name,
        ]);

        return response()->json(['message' => 'Role updated successfully', 'role' => $role], 200);
    }
    public function destroy($id)
    {
        $role = Role::find($id);

        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }

        $role->delete();

        return response()->json(['message' => 'Role deleted successfully'], 200);
    }
}
