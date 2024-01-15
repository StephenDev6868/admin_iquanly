<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SemiProduct extends Model
{
    use HasFactory;

    protected $table = 'semi_products';

    protected $fillable = [
        'amount',
        'order_id',
        'product_id',
        'material_id',
        'process_cut_order_id',
    ];

    protected function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    protected function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }
}
