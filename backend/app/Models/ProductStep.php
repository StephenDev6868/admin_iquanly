<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductStep extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'time',
        'coefficient',
        'unit_price',
        'user_ids',
        'product_id',
    ];

    public function product(): HasOne
    {
         return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public $casts = [
        'user_ids' => 'array'
    ];
}
