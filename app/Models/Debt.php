<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;

    // Define the table name if it's different from the pluralized model name
    protected $table = 'debts';

    // Define which attributes can be mass assigned
    protected $fillable = [
        'user_id',
        'debt_name',
        'principal_amount',
        'remaining_amount',
        'interest_rate',
        'due_date',
        'minimum_payment',
    ];

    // Define the relationship to the User model (each debt belongs to a user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
