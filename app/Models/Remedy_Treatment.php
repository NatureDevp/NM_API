<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Remedy_Treatment extends Model
{

    protected $fillable = [
        'remedy_id',
        'name',
        'description',
    ];

    public function remedy(): BelongsTo
    {
        return $this->belongsTo(Remedy_Remedies::class, 'remedy_id', 'id');
    }
}
