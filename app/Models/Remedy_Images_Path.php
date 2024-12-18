<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Remedy_Images_Path extends Model
{
    protected $fillable = [
        'remedy_id',
        'path',
    ];

    public function remedy(): BelongsTo
    {
        return $this->belongsTo(Remedy_Remedies::class, 'remedy_id', 'id');
    }
}
