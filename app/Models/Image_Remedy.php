<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image_Remedy extends Model
{
    protected $fillable = [
        'name',
        'path',
        'remedy_id',
    ];

    public function remedy(): BelongsTo
    {
        return $this->belongsTo(Remedy::class);
    }
}
