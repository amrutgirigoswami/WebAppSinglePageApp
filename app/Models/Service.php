<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'icon_class',
        'short_desc',
        'description',
        'status',
    ];
}
