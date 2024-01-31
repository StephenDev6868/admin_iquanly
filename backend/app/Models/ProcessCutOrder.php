<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessCutOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'config_cut_diagram_id',
        'user_id',
        'order_id',
        'product_id',
        'sub_product_id',
        'sub_quantity',
        'total_product',
        'total_material',
        'product_result',
        'material_contain',
        'status',
        'note',
        'start_at',
        'end_at',
    ];

    protected function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }

    protected function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    protected function material()
    {
        return $this->hasOne(Material::class, 'id', 'material_id');
    }
}
