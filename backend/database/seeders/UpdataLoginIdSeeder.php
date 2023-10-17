<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UpdataLoginIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::query()->where('login_id', '<>', 'manager_one')->get(['full_name','login_id', 'id', 'pass_init']);
        foreach ($users as $user) {
            $user->update([
                'login_id' => '8688' . $user['id'],
            ]);
        }
        dd($users->toJson());
    }
}
