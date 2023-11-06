<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
        'name',
        'code',
        'start_at',
        'end_at',
        'detail_product',
    ];

    public $casts = [
        'detail_product' => 'array'
    ];
}
