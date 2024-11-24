<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Remedy_Usage extends Model
{
    protected $fillable = [
        'name',
        'description',
        'remedy_id',
    ];

    public function remedy(): BelongsTo
    {
        return $this->belongsTo(Remedy_Remedies::class, 'remedy_id', 'id');
    }
}
