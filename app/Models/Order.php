<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id',// ID unik untuk pesanan
        'user_id',
        'total_price',
        'status'
    ];
}
