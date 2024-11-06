<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Remedy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'status',
        'cover',
        'ratings',
        'plant_id',
        'updated_by',
        'created_by',
    ];


    public function plant(): BelongsTo
    {
        return $this->belongsTo(Plant::class, 'plant_id', 'id');
    }

    //FOREIGN KEY

    public function steps(): HasMany
    {
        return $this->hasMany(Step::class);
    }

    public function usages(): HasMany
    {
        return $this->hasMany(Usage::class);
    }

    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image_Remedy::class);
    }

    public function ailments(): HasMany
    {
        return $this->hasMany(Ailment_Remedy::class);
    }

    public function userUpdateBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }

    public function userCreateBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
