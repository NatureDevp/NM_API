<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Remedy_Remedies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'status',
        'rating',
        'side_effect',
        'cover',
        'plant_id',
        'update_id',
        'create_id',
    ];

    public function create_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'create_id', 'id');
    }

    public function update_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'update_id', 'id');
    }


    public function plant(): BelongsTo
    {
        return $this->belongsTo(Plant_Plants::class, 'plant_id', 'id');
    }


    public function images(): HasMany
    {
        return $this->hasMany(Remedy_Images_Path::class, 'remedy_id', 'id');
    }

    public function steps(): HasMany
    {
        return $this->hasMany(Remedy_Step::class, 'remedy_id', 'id');
    }

    public function treatments(): HasMany
    {
        return $this->hasMany(Remedy_Treatment::class, 'remedy_id', 'id');
    }

    public function ingredients(): HasMany
    {
        return $this->hasMany(Remedy_Ingredient::class, 'remedy_id', 'id');
    }

    public function usages(): HasMany
    {
        return $this->hasMany(Remedy_Usage::class, 'remedy_id', 'id');
    }
}
