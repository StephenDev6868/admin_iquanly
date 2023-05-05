<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $table ='sub_categorys';

    protected $fillable = ['name', 'slug', 'category_id', 'status'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'id', 'category_id');
    }

}
