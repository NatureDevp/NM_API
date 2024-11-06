<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ailment_Plant extends Model
{
    protected $fillable = [
        'name',
        'type',
        'description',
        'plant_id',
    ];

    public function plants(): BelongsToMany
    {
        return $this->belongsToMany(Plant::class);
    }
}
