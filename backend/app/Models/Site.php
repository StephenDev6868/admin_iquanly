<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dotlogics\Grapesjs\App\Traits\EditableTrait;
use Dotlogics\Grapesjs\App\Contracts\Editable;

class Site extends Model implements Editable
{
    use HasFactory, softDeletes, EditableTrait;

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
