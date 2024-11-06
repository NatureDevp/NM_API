<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plant extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'scientific',
        'description',
        'status',
        'cover',
        'likes',
        'updated_by',
        'created_by',
    ];


    //RELATIONSHIP TO REMEDIES 
    public function remedies(): HasMany
    {
        return $this->hasMany(Remedy::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image_Plant::class);
    }

    public function ailments(): HasMany
    {
        return $this->hasMany(Ailment_Plant::class);
    }

    public function userCreateBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
    public function userUpdateBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
