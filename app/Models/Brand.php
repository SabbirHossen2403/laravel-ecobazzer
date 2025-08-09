<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
     protected $fillable = [
        'brand_name',
        'brand_url',
        'brand_icon',
        'status',
    ];

    function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
