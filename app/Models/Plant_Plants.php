<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plant_Plants extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'local_name',
        'scientific_name',
        'description',
        'like',
        'status',
        'cover',
        'treatment',
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
}
