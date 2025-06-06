<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'author',
        'image',
        'content',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 1);
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 0);
    }

    public function scopeArchived($query)
    {
        return $query->where('status', 2);
    }
}
