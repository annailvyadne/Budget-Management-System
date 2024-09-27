<?php

namespace App\Http\Controllers;

use App\Models\SinkingFund;
use Illuminate\Http\Request;

class SinkingFundController extends Controller
{
    // Show all sinking funds
    public function index()
    {
        $funds = SinkingFund::all();
        return view('funds.index', compact('funds'));
    }

    // Show form to create a sinking fund
    public function create()
    {
        return view('funds.create');
    }

    // Store a new sinking fund
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fund_name' => 'required|string|max:255',
            'target_amount' => 'required|numeric',
            'current_amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        SinkingFund::create($validated);

        return redirect()->route('funds.index')->with('success', 'Sinking Fund created successfully.');
    }

    // Show form to edit a sinking fund
    public function edit($id)
    {
        $fund = SinkingFund::findOrFail($id);
        return view('funds.edit', compact('fund'));
    }

    // Update an existing sinking fund
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'fund_name' => 'required|string|max:255',
            'target_amount' => 'required|numeric',
            'current_amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        $fund = SinkingFund::findOrFail($id);
        $fund->update($validated);

        return redirect()->route('funds.index')->with('success', 'Sinking Fund updated successfully.');
    }

    // Delete a sinking fund
    public function destroy($id)
    {
        $fund = SinkingFund::findOrFail($id);
        $fund->delete();

        return redirect()->route('funds.index')->with('success', 'Sinking Fund deleted successfully.');
    }
}
