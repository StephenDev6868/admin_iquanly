<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigCutDiagram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'order_id',
        'product_id',
        'sub_product_id',
        'sub_quantity',
        'quantity',
        'layer',
        'long',
        'detail_config'
    ];

    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }

    protected $casts = [
        'detail_config' => 'array'
    ];
}
