<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'banner_title',
        'banner_sub_title',
        'banner_details',
        'banner_btn_text',
        'banner_btn_url',
        'banner_image',
        'status',
    ];

    function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
