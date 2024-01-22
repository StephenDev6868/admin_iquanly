<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "orders";

    protected $fillable = [
        'name',
        'code',
        'start_at',
        'end_at',
        'loss',
        'detail_product',
    ];

    public function dashboard()
    {
        return Order::query()
            ->join('semi_products', 'semi_products.order_id', '=', 'orders.id')
            ->join('process_cut_orders', 'process_cut_orders.order_id', '=', 'orders.id')
            ->get();
    }

    public $casts = [
        'detail_product' => 'array'
    ];
}
