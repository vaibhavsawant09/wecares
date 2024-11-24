<?php

namespace App\Http\Controllers;

use App\Models\InsurancePolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsurancePolicyController extends Controller
{
    public function index()
    {
        $policies = InsurancePolicy::with('subCategory', 'user')->get();
        return response()->json($policies);
    }

    public function store(Request $request)
    {
        $request->validate([
            'policy_name' => 'required|string|max:255',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'details' => 'required|string',
            'premium' => 'required|numeric|min:0',
            'coverage_amount' => 'required|numeric|min:0',
        ]);

        $policy = InsurancePolicy::create([
            'policy_name' => $request->policy_name,
            'sub_category_id' => $request->sub_category_id,
            'details' => $request->details,
            'premium' => $request->premium,
            'coverage_amount' => $request->coverage_amount,
            'created_by' => Auth::id(),
            'tenure' => '',
            'status' => 1,
            'created_date' => '',
            'updated_by' => '',
        ]);

        return response()->json($policy);
    }

    public function show($id)
    {
        $policy = InsurancePolicy::with('subCategory', 'user', 'policyHolders')->findOrFail($id);
        return response()->json($policy);
    }

    public function update(Request $request, $id)
    {
        $policy = InsurancePolicy::findOrFail($id);

        $request->validate([
            'policy_name' => 'required|string|max:255',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'details' => 'required|string',
            'premium' => 'required|numeric|min:0',
            'coverage_amount' => 'required|numeric|min:0',
        ]);

        $policy->update($request->only('policy_name', 'sub_category_id', 'details', 'premium', 'coverage_amount'));

        return response()->json($policy);
    }

    public function destroy($id)
    {
        $policy = InsurancePolicy::findOrFail($id);
        $policy->delete();
        return response()->json(['message' => 'Policy deleted successfully']);
    }
    
}
