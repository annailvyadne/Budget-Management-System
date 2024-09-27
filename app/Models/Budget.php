<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    // Define the table if it's not the plural of the model name
    protected $table = 'budgets';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'total_income',
        'total_expense',
        'savings_goal',
        'sinking_fund_goal',
        'debt_payment',
    ];

    // You can define relationships with other models if necessary
    // Example: Relationship with Expense model
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    // Example: Relationship with Income model (if you have one)
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    // Example: You can add methods for calculations or other business logic
    public function calculateSavings()
    {
        return $this->total_income - $this->total_expense;
    }
}
