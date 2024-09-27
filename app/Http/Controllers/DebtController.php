<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    // Show all debts
    public function index()
    {
        $debts = Debt::all();
        return view('debts.index', compact('debts'));
    }

    // Show form to create a debt
    public function create()
    {
        return view('debts.create');
    }

    // Store a new debt
    public function store(Request $request)
    {
        $validated = $request->validate([
            'debt_name' => 'required|string|max:255',
            'principal_amount' => 'required|numeric',
            'remaining_amount' => 'required|numeric',
            'interest_rate' => 'required|numeric|min:0|max:100',
            'minimum_payment' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        Debt::create($validated);

        return redirect()->route('debts.index')->with('success', 'Debt created successfully.');
    }

    // Show form to edit a debt
    public function edit($id)
    {
        $debt = Debt::findOrFail($id);
        return view('debts.edit', compact('debt'));
    }

    // Update an existing debt
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'debt_name' => 'required|string|max:255',
            'principal_amount' => 'required|numeric',
            'remaining_amount' => 'required|numeric',
            'interest_rate' => 'required|numeric|min:0|max:100',
            'minimum_payment' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        $debt = Debt::findOrFail($id);
        $debt->update($validated);

        return redirect()->route('debts.index')->with('success', 'Debt updated successfully.');
    }

    // Delete a debt
    public function destroy($id)
    {
        $debt = Debt::findOrFail($id);
        $debt->delete();

        return redirect()->route('debts.index')->with('success', 'Debt deleted successfully.');
    }
}
