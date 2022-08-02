<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'sites';

    protected $fillable = [
        'title',
        'description',
        'logo',
        'domain',
        'config'
    ];

    protected $casts = [
        'config' => 'array'
    ];
}
