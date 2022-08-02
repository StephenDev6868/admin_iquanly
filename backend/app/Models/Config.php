<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Config extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'configs';

    protected $fillable = ['name', 'style', 'js_handle'];

}
