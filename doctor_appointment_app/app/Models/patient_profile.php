<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_profile extends Model
{
    use HasFactory;

    // protected $guarded = [];
    
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'image', 
        'age', 
        'blood_group', 
        'medical_history', 
        'country', 
        'phone', 
        'address', 
        'gender'
    ];
}
