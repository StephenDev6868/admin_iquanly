<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('sub_categorys')->truncate();
        DB::table('users')->truncate();
        DB::table('posts')->truncate();
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

    }
}
