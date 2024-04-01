<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terminal extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 
        'region_id', 
        'location'
    ];

    // Define the relationship with region
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    // Define the relationship with routes as start terminal
    public function startRoutes()
    {
        return $this->hasMany(Route::class, 'start_terminal_id');
    }

    // Define the relationship with routes as end terminal
    public function endRoutes()
    {
        return $this->hasMany(Route::class, 'end_terminal_id');
    }
}
