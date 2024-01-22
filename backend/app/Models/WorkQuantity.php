<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkQuantity extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_step_id',
        'user_id',
        'product_id',
        'quantity',
        'work_date'
    ];

    public $casts = [
        'date_work' => 'date:d-m-Y',
        'dateWork' => 'date:d-m-Y',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
