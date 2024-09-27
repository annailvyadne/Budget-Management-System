<?php

namespace App\Http\Controllers;

use App\Models\Saving;
use Illuminate\Http\Request;

class SavingController extends Controller
{
    // Show all savings
    public function index()
    {
        $savings = Saving::all();
        return view('savings.index', compact('savings'));
    }

    // Show form to create a saving
    public function create()
    {
        return view('savings.create');
    }

    // Store a new saving
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'goal_name' => 'nullable|string',
            'goal_amount' => 'nullable|numeric',
            'saved_date' => 'required|date',
        ]);

        Saving::create($validated);

        return redirect()->route('savings.index')->with('success', 'Saving added successfully.');
    }

    // Show form to edit a saving
    public function edit($id)
    {
        $saving = Saving::findOrFail($id);
        return view('savings.edit', compact('saving'));
    }

    // Update an existing saving
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'goal_name' => 'nullable|string',
            'goal_amount' => 'nullable|numeric',
            'saved_date' => 'required|date',
        ]);

        $saving = Saving::findOrFail($id);
        $saving->update($validated);

        return redirect()->route('savings.index')->with('success', 'Saving updated successfully.');
    }

    // Delete a saving
    public function destroy($id)
    {
        $saving = Saving::findOrFail($id);
        $saving->delete();

        return redirect()->route('savings.index')->with('success', 'Saving deleted successfully.');
    }
}
