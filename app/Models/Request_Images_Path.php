<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request_Images_Path extends Model
{

    protected $fillable = [
        'path',
        'request_id'
    ];
}
