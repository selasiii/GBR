<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Route extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'start_terminal_id',
        'end_terminal_id'
    ];

    // Define the relationship with start terminal
    public function startTerminal()
    {
        return $this->belongsTo(Terminal::class, 'start_terminal_id');
    }

    // Define the relationship with end terminal
    public function endTerminal()
    {
        return $this->belongsTo(Terminal::class, 'end_terminal_id');
    }
}
