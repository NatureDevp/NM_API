<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image_Request extends Model
{
    protected $fillable = [
        'name',
        'path',
        'request_plant_id',
    ];

    public function request_plant(): BelongsTo
    {
        return $this->belongsTo(RequestPlant::class, 'request_plant_id', 'id');
    }
}
