<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\User;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    // Show all incomes
    public function index()
    {
        $incomes = Income::with('user')->get(); // Fetch with user relation
        return view('incomes.index', compact('incomes'));
    }

    // Show form to create income
    public function create()
    {
        $users = User::all(); // Get all users for the dropdown
        return view('incomes.create', compact('users'));
    }

    // Store a new income
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'source' => 'nullable|string',
            'income_date' => 'required|date',
        ]);

        Income::create($validated);

        return redirect()->route('incomes.index')->with('success', 'Income added successfully.');
    }

    // Show form to edit income
    public function edit($id)
    {
        $income = Income::findOrFail($id);
        $users = User::all();
        return view('incomes.edit', compact('income', 'users'));
    }

    // Update an existing income
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'source' => 'nullable|string',
            'income_date' => 'required|date',
        ]);

        $income = Income::findOrFail($id);
        $income->update($validated);

        return redirect()->route('incomes.index')->with('success', 'Income updated successfully.');
    }

    // Delete an income
    public function destroy($id)
    {
        $income = Income::findOrFail($id);
        $income->delete();

        return redirect()->route('incomes.index')->with('success', 'Income deleted successfully.');
    }
}
