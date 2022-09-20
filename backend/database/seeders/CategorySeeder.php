<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'sport',
            ],
            [
                'name' => 'education',
            ],
            [
                'name' => 'fitness',
            ],
            [
                'name' => 'foods',
            ],
            [
                'name' => 'travel',
            ],
            [
                'name' => 'science',
            ],
            [
                'name' => 'cinema',
            ],
        ]);
    }
}
