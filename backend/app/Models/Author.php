<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'authors';

    protected $fillable = [
        ''
    ];

//    public function subCategory()
//    {
//        return $this->hasOne(SubCategory::class, 'id', 'category_id');
//    }
}
