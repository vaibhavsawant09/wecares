<?php

namespace App\Http\Controllers;

use App\Models\SupportTicket;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    public function index()
    {
        $tickets = SupportTicket::with('user', 'category')->get();
        return response()->json($tickets);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'ticket_category_id' => 'required|exists:ticket_categories,id',
            'description' => 'required|string',
        ]);

        $ticket = SupportTicket::create([
            'user_id' => $request->user_id,
            'ticket_category_id' => $request->ticket_category_id,
            'description' => $request->description,
        ]);

        return response()->json($ticket);
    }

    public function update(Request $request, $id)
    {
        $ticket = SupportTicket::findOrFail($id);

        $request->validate([
            'status' => 'required|in:open,in_progress,resolved,closed',
        ]);

        $ticket->update($request->only('status'));

        return response()->json($ticket);
    }

    public function destroy($id)
    {
        $ticket = SupportTicket::findOrFail($id);
        $ticket->delete();
        return response()->json(['message' => 'Ticket deleted successfully']);
    }
}
