<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinkingFund extends Model
{
    use HasFactory;

    // Define the table name if it's different from the pluralized model name
    protected $table = 'sinking_funds';

    // Define which attributes can be mass assigned
    protected $fillable = [
        'user_id',
        'fund_name',
        'target_amount',
        'current_amount',
        'due_date',
    ];

    // Define the relationship to the User model (each sinking fund belongs to a user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
