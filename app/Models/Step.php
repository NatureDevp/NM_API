<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'remedy_id',
    ];

    public function remedy(): BelongsTo
    {
        return $this->belongsTo(Remedy::class);
    }
}
