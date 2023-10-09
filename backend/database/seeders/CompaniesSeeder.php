<?php

namespace Database\Seeders;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'CONG TY MAY',
            'tax_id' => '0000000000',
            'address' => 'TP DA NANG',
            'email' => 'iquanly@gmail.com',
            'website' => 'iquanly.com',
            'agent' => 'LongNT',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
