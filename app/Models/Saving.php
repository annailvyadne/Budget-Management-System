<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    use HasFactory;

    // Define the table name if it's different from the pluralized model name
    protected $table = 'savings';

    // Define which attributes can be mass assigned
    protected $fillable = [
        'amount',
        'goal_name',
        'goal_amount',
        'saved_date',
    ];

    // Define the relationship to the User model (each saving belongs to a user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
