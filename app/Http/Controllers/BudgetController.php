<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    // Show all budgets
    public function index()
    {
        $budgets = Budget::all();
        return view('budgets.index', compact('budgets'));
    }

    // Show form to create a new budget
    public function create()
    {
        return view('budgets.create');
    }

    // Store a new budget
    public function store(Request $request)
    {
        $validated = $request->validate([
            'total_income' => 'required|numeric',
            'total_expense' => 'required|numeric',
            'savings_goal' => 'nullable|numeric',
            'sinking_fund_goal' => 'nullable|numeric',
            'debt_payment' => 'nullable|numeric',
        ]);

        Budget::create($validated);

        return redirect()->route('budgets.index')->with('success', 'Budget created successfully.');
    }


    // Show form to edit a budget
    public function edit($id)
    {
        $budget = Budget::findOrFail($id);
        return view('budgets.edit', compact('budget'));
    }

    // Update an existing budget
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'total_income' => 'required|numeric',
            'total_expense' => 'required|numeric',
            'savings_goal' => 'nullable|numeric',
            'sinking_fund_goal' => 'nullable|numeric',
            'debt_payment' => 'nullable|numeric',
        ]);

        $budget = Budget::findOrFail($id);
        $budget->update($validated);

        return redirect()->route('budgets.index')->with('success', 'Budget updated successfully.');
    }

    // Delete a budget
    public function destroy($id)
    {
        $budget = Budget::findOrFail($id);
        $budget->delete();

        return redirect()->route('budgets.index')->with('success', 'Budget deleted successfully.');
    }
}
