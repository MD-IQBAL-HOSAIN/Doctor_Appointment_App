<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor_profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'image',
        'department_id',
        'education',
        'experience',
        'fees',
        'about',
        'gender',
        'degree',
        'university',
        'country',
        'phone',
        'address'
    ];
}

