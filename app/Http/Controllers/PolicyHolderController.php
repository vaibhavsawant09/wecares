<?php

namespace App\Http\Controllers;

use App\Models\PolicyHolder;
use Illuminate\Http\Request;

class PolicyHolderController extends Controller
{
    public function index()
    {
        $policyHolders = PolicyHolder::with('user', 'policy')->get();
        return response()->json($policyHolders);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'policy_id' => 'required|exists:insurance_policies,id',
        ]);

        $policyHolder = PolicyHolder::create([
            'user_id' => $request->user_id,
            'policy_id' => $request->policy_id,
        ]);

        return response()->json($policyHolder);
    }

    public function update(Request $request, $id)
    {
        $policyHolder = PolicyHolder::findOrFail($id);

        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'claim_status' => 'required|in:none,claimed,stopped',
        ]);

        $policyHolder->update($request->only('status', 'claim_status'));

        return response()->json($policyHolder);
    }

    public function destroy($id)
    {
        $policyHolder = PolicyHolder::findOrFail($id);
        $policyHolder->delete();
        return response()->json(['message' => 'Policy Holder deleted successfully']);
    }
}
