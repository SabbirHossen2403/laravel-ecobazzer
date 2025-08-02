<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'category_url',
        'category_icon',
        'status',
    ];

    function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
