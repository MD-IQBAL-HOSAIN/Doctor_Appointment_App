<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function department(): BelongsTo
    {
        return $this->belongsTo(department::class);
    }
}

