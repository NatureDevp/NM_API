<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RequestPlant extends Model
{


    protected $fillable = [

        'plant_name',
        'scientific_name',
        'description',
        'additional_info',
        'is_accepted',
        'status',
        'request_by',
        'accept_by',

    ];
    public function userRequestby(): BelongsTo
    {
        return $this->belongsTo(User::class, 'request_by', 'id');
    }
    public function userAcceptby(): BelongsTo
    {
        return $this->belongsTo(User::class, 'accept_by', 'id');
    }
    public  function images(): HasMany
    {
        return $this->hasMany(Image_Request::class, 'request_plant_id', 'id');
    }
}
