<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WDevice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'date_buy',
        'date_warranty',
        'status',
        'in_charge_user',
    ];

    protected function userKeep()
    {
        return $this->hasOne(User::class, 'id', 'in_charge_user');
    }
}
