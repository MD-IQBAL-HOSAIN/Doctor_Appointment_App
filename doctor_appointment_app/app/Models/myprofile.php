<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'name',
        'email',
        'password', 
        'role',
    ];
}

