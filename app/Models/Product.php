<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_category_id',
        'product_name',
        'product_desc',
        'product_price',
        'product_images',
    ];

    public function category()
    {
        return $this->belongsTo(Product_category::class, 'product_category_id');
    }
}
