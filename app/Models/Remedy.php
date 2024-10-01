<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remedy extends Model
{
    use HasFactory;
    protected $fillable = [
        'plant_id',
        'name',
        'category',
        'description',
        'image',
        'ingredients',
        'prep_time',
        'frequency',
        'side_effects',
        'rating',
        'instructions',
        'storage',
        'dosage',
        'approved',
        'source',
    ];
}
