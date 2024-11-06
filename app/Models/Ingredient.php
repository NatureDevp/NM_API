<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    protected $fillable = [
        'name',
        'description',
        'remedy_id',

    ];

    public function remedy(): BelongsToMany
    {
        return $this->belongsToMany(Remedy::class);
    }
}
