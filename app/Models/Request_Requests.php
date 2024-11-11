<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request_Requests extends Model
{
    protected $fillable = [
        'plant_name',
        'scientific_name',
        'description',
        'additional_info',
        'status',
        'admin_id',
        'user_id',
    ];


    public function accept_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }

    public function request_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
