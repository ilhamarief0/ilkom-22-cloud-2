<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id',// ID unik untuk pesanan
        'user_id',// ID user yang membuat pesanan
        'total_price',// Total harga keseluruhan pesanan
        'status' // Status pesanan (misal: 'pending', 'completed', 'cancelled')
    ];
}
