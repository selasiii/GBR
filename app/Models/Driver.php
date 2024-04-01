<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'licence_number', 
        'first_name', 
        'last_name', 
        'email',
        'address', 
        'phone_number', 
        'password', 
        'gender', 
        'date_of_birth'
    ];

    // Define any additional properties or methods as needed
}
