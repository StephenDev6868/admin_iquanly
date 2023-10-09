<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert([
           [
                'company_id'    => 1,
                'name'          => 'TỔ HOÀN THÀNH',
                'created_at'    => now(),
                'updated_at'    => now(),
           ],
            [
                'company_id'    => 1,
                'name'          => 'TỔ SẢN XUẤT',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'company_id'    => 1,
                'name'          => 'TỔ ĐIỀU HÀNH',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'company_id'    => 1,
                'name'          => 'TỔ SẢN XUẤT',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
