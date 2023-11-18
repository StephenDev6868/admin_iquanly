<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSalary extends Model
{
    use HasFactory;

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
