<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FakePassAndLoginIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::query()->where('id', '<>', 1)->get();
        $index = 1;
        foreach ($users as $user) {
            $pass_init = rand(100000, 999999);
            $user->update([
                'login_id' => 'congnhan' . $index,
                'pass_init' => $pass_init,
                'password' => Hash::make($pass_init),
            ]);
            $index++;
        }
    }
}
