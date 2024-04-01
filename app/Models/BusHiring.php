<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusHiring extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'company_name', 'contact_name', 'company_email', 
        'phone', 'additional_phone', 'start_location', 'end_location', 
        'departure_date', 'number_of_buses', 'bus_capacity', 
        'duration_in_days', 'purpose', 'status'
    ];

    // Define any additional properties or methods as needed
}
