<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSalary extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'work_day',
        'permitted_day_off',
        'not_allowed_day_off',
        'overtime',
        'eat_shift',
        'late',
        'early',
        'support_money',
        'advance',
        'sum',
        'start_at',
        'end_at',
    ];

    protected function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
