<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with('user')->get();
        return response()->json($reports);
    }

    public function store(Request $request)
    {
        $request->validate([
            'generated_by' => 'required|exists:users,id',
            'report_name' => 'required|string|max:255',
            'report_type' => 'required|in:user,policy,ticket',
            'data' => 'required',
        ]);

        $report = Report::create([
            'generated_by' => $request->generated_by,
            'report_name' => $request->report_name,
            'report_type' => $request->report_type,
            'data' => $request->data,
        ]);

        return response()->json($report);
    }
}
