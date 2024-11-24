<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plant_Images_Path extends Model
{

    use HasFactory;

    protected $fillable = [
        'path',
        'plant_id'
    ];

    public function plant(): BelongsTo
    {
        return $this->belongsTo(Plant_Plants::class, 'plant_id', 'id');
    }
}
