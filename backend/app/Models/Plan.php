<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
        'duration',
        'unitDuration',
        'features',
        'user_id',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
