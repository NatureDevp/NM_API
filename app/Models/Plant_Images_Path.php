<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant_Images_Path extends Model
{

    use HasFactory;

    protected $fillable = [
        'path',
        'plant_id'
    ];
}
