<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ailment_Remedy extends Model
{

    protected $fillable = [
        'name',
        'type',
        'description',
        'remedy_id',
    ];

    public function remedies(): BelongsToMany
    {
        return $this->belongsToMany(Remedy::class);
    }
}
