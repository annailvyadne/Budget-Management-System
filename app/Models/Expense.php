<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // Define the table if it's not the plural of the model name
    protected $table = 'expenses';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'category_id',
        'amount',
        'description',
        'expense_date',
    ];

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
