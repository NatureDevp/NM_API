<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remedy_Remedies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'local_name',
        'description',
        'treatment',
        'usage',
        'status',
        'rating',
        'side_effect',
        'ingredient',
        'cover',
        'plant_id',
        'update_id',
        'create_id',
    ];
}
