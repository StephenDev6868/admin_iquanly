<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Company;

class Board extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['company_id', 'name'];

    protected function users()
    {
        return $this->hasMany(User::class, 'board_id', 'id');
    }

    protected function companyBelong()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
}
