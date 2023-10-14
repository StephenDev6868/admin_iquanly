<?php

namespace App\Models;

use App\Http\Controllers\ProductStepController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable, softDeletes;

    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'creator_id',
        'name',
        'code',
//        'start_at',
//        'end_at',
    ];

    public function creatorName(int $creator_id)
    {
        $data = Product::query()->join('users', 'users.id', '=', 'products.creator_id')
            ->where('users.id', $creator_id)
            ->select(['users.full_name as fullName'])
            ->first();
        return optional($data)->fullName;
    }

	/**
    */
    public function steps()
    {
        return $this->hasMany(ProductStepController::class, 'product_id', 'id');
    }
}
