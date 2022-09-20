<?php

namespace App\Models;

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
    ];

    /**
     */
    public function userName()
    {
        return $this->hasOne(User::class, 'id', 'user_id')
            ->select(DB::raw("CONCAT(users.first_name, ' ',  users.last_name) as full_name"))
            ->first();
    }
}
