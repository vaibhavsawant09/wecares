<?php

namespace App\Http\Controllers;

use App\Models\SystemSetting;
use Illuminate\Http\Request;

class SystemSettingController extends Controller
{
    public function index()
    {
        $settings = SystemSetting::all();
        return response()->json(['settings' => $settings], 200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'setting_key' => 'required|string|unique:system_settings',
            'setting_value' => 'required',
            'updated_by' => 'required|exists:users,id',
        ]);

        $setting = SystemSetting::create($request->all());

        return response()->json(['message' => 'Setting created successfully', 'setting' => $setting], 201);
    }
    public function update(Request $request, $id)
    {
        $setting = SystemSetting::find($id);

        if (!$setting) {
            return response()->json(['message' => 'Setting not found'], 404);
        }

        $request->validate([
            'setting_key' => 'required|string|unique:system_settings,setting_key,' . $id,
            'setting_value' => 'required',
            'updated_by' => 'required|exists:users,id',
        ]);

        $setting->update($request->all());

        return response()->json(['message' => 'Setting updated successfully', 'setting' => $setting], 200);
    }
    public function destroy($id)
    {
        $setting = SystemSetting::find($id);

        if (!$setting) {
            return response()->json(['message' => 'Setting not found'], 404);
        }

        $setting->delete();

        return response()->json(['message' => 'Setting deleted successfully'], 200);
    }
}
