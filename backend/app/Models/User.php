<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, softDeletes;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'login_id',
        'is_super_admin',
        'email',
        'remember_token',
        'birthday',
        'role_id',
        'board_id',
        'company_id',
        'address',
        'phone_number',
        'password',
        'begin_work',
        'status_work',
        'cccd',
        'title_level',
        'stk',
        'bank',
        'amount_month',
        'is_rent_moto',
        'pass_init',
        'first_login',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function roleName($user_id): string
    {
        $data = User::query()->join('roles', 'roles.id','=', 'users.role_id')
            ->where('users.id', $user_id)
            ->select(['roles.name as roleName'])
            ->first();
        return $data ? $data->roleName: 'N/A';
    }

    public function boardName($user_id): string
    {
        $data = User::query()->join('boards', 'boards.id','=', 'users.board_id')
            ->where('users.id', $user_id)
            ->select(['boards.name as boardName'])
            ->first();

        return $data ? $data->boardName : 'N/A';
    }

    public function companyName($user_id): string
    {
        $data = User::query()->join('companies', 'companies.id','=', 'users.company_id')
            ->where('users.id', $user_id)
            ->select(['companies.name as companyName'])
            ->first();

        return $data->companyName;
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday' => 'date:Y-m-d',
        'begin_work' => 'date:Y-m-d',
        'created_at' => 'date:Y-m-d',
    ];
}
