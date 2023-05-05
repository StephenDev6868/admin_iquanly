<?php

namespace App\Models;

use Guzzle\Tests\Service\Mock\Command\Sub\Sub;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory, softDeletes;

    /**
     * @var mixed
     */
    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'status',
        'avatar',
        'category_id',
        'keyword',
        'sub_keyword',
        'sort_description',
    ];

    /**
     */
    public function userName()
    {
        return $this->hasOne(User::class, 'id', 'user_id')
            ->select(DB::raw("CONCAT(users.first_name, ' ',  users.last_name) as full_name"))
            ->first();
    }

    public function category()
    {
        return $this->hasOne(SubCategory::class, 'id', 'category_id');
    }
}
