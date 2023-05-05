<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name', 'slug', 'status'];

    protected $table = 'categories';

    public function hasSubCategories()
    {
        return $this->hasMany('App\Models\SubCategory', 'category_id')
            ->where('status', 1);
    }
}
