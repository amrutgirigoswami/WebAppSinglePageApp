<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'fb_url',
        'twitter_url',
        'linkedin_url',
        'instagram_url',
        'image',
        'status', // 1: active, 0: inactive, 2: pending
    ];

    protected $casts = [
        'status' => 'integer',
    ];

    public function getStatusAttribute($value)
    {
        return (int) $value;
    }
}
