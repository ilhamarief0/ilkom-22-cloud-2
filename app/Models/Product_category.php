<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    protected $table = 'product_categories';

    protected $fillable = [
        'name', // tambahkan jika field ini ada di tabel
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_category_id');
    }
}