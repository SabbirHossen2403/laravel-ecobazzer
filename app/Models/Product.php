<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'stock',
        'category_id',
        'brand_id',
        'price',
        'selling_price',
        'short_details',
        'long_details',
        'additional_info',
        'sku',
        'featured_img',
        'gallery_img',
        'status',
        'featured'

        
    ];

       function scopeActive($query)
    {
        return $query->where('status', 1);
    }

public function category (){
    return $this->belongsTo(Category::class);
}
public function brand (){
    return $this->belongsTo(Brand::class);
}

public function reviews()
{
    return $this->hasMany(Review::class, 'product_id', 'id');
}

}
