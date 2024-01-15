<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerSemiProduct extends Model
{
    use HasFactory;

    protected $table = 'partner_semi_products';

    protected $fillable = [
        'semi_product_id',
        'partner_id',
        'order_id',
        'product_id',
        'input',
        'output',
        'amount_product_valid',
        'amount_product_error',
        'day_input',
        'day_output',
    ];

    protected function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }

    protected function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
