<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plant_Treatment extends Model
{
    use HasFactory;
    protected $fillable = [
        'plant_id',
        'name',
        'description'
    ];

    public function treatment(): BelongsTo
    {
        return $this->belongsTo(Plant_Plants::class, 'plant_id', 'id');
    }
}
