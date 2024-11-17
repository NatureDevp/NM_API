<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plant_Plants extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'scientific_name',
        'description',
        'like',
        'status',
        'cover',
        'request_plant_id',
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

    public function requests_info(): BelongsTo
    {
        return $this->belongsTo(Request_Requests::class, 'request_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Plant_Images_Path::class, 'plant_id', 'id');
    }

    public function treatments(): HasMany
    {
        return $this->hasMany(Plant_Treatment::class, 'plant_id', 'id');
    }

    public function local_names(): HasMany
    {
        return $this->hasMany(Plant_Local_Name::class, 'plant_id', 'id');
    }
}
