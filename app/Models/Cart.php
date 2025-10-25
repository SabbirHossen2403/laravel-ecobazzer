<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     protected $fillable = [
        "product_id",
        "customer_id",
        "qty",
    ];

    function product(){
        return $this->belongsTo(Product::class);
    }
}
