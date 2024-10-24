<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestPlant extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'plant_name',
        'scientific',
        'description',
        'handle_by',
        'image_path',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
