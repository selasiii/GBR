<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'driver_id',
        'conductor_id',
        'bus_id',
        'route_id',
        'departure_datetime',
        'estimated_duration',
        'status'
    ];

    // Define relationships
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function conductor()
    {
        return $this->belongsTo(Conductor::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}



