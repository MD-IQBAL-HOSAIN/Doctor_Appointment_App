<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'is_active',
    ];
    public function doctors(): HasMany
    {
        return $this->hasMany(doctor_profile::class);
    }

}
