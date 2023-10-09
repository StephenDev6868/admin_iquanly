<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name'     => 'manager one',
            'login_id'      => 'manager_one',
            'password'      => Hash::make('123123123'),
            'cccd'          => '00000000000',
            'role_id'       => '1',
            'title_level'   => 'Tổng quản lý',
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);
    }
}
