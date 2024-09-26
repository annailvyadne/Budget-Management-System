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
        'user_id',
        'category_id',
        'amount',
        'description',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
