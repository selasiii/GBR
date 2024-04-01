<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'issued_at', 
        'expires_at', 
        'status', 
        'user_id', 
        'trip_id', 
        'payment_id'
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
