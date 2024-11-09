<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Usage extends Model
{
    protected $fillable = [

        'name',
        'description',
        'remedy_id'
    ];

    public function remedy(): BelongsToMany
    {
        return $this->belongsToMany(Remedy::class);
    }
}
