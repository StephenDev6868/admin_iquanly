<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name'    => 'Dịch vụ seo',
                'status'  => 1,
                'slug'    => \Illuminate\Support\Str::slug('Dịch vụ seo', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'    => 'Về chúng tôi',
                'status'  => 1,
                'slug'    => \Illuminate\Support\Str::slug('Về chúng tôi', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'    => 'Cộng đồng seo',
                'status'  => 1,
                'slug'    => \Illuminate\Support\Str::slug('Cộng đồng seo', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'    => 'Dịch vụ backlink báo',
                'status'  => 1,
                'slug'    => \Illuminate\Support\Str::slug('Dịch vụ backlink báo', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'    => 'Báo giá seo',
                'status'  => 1,
                'slug'    => \Illuminate\Support\Str::slug('Báo giá seo', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'    => 'Tin tức',
                'status'  => 1,
                'slug'    => \Illuminate\Support\Str::slug('Tin tức', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('sub_categorys')->insert([
            [
                'category_id' => 4,
                'name'        => 'Dịch vụ viết bài Pr',
                'slug'        => \Illuminate\Support\Str::slug('Dịch vụ viết bài Pr', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name'        => 'Dịch vụ backlink',
                'slug'        => \Illuminate\Support\Str::slug('Dịch vụ backlink', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name'        => 'Dịch vụ backlink entity [Hot]',
                'slug'        => \Illuminate\Support\Str::slug('Dịch vụ backlink entity [Hot]', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name'        => 'Dịch vụ chăm sóc website',
                'slug'        => \Illuminate\Support\Str::slug('Dịch vụ chăm sóc website', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name'        => 'Dịch vụ book báo',
                'slug'        => \Illuminate\Support\Str::slug('Dịch vụ book báo', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name'        => 'Dịch vụ guest post',
                'slug'        => \Illuminate\Support\Str::slug('Dịch vụ guest post', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name'        => 'Báo điện tử',
                'slug'        => \Illuminate\Support\Str::slug('Báo điện tử', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name'        => 'Giới thiệu',
                'slug'        => \Illuminate\Support\Str::slug('Giới thiệu', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name'        => 'Đội ngũ chuyên gia',
                'slug'        => \Illuminate\Support\Str::slug('Đội ngũ chuyên gia', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name'        => 'Tuyển dụng',
                'slug'        => \Illuminate\Support\Str::slug('Tuyển dụng', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name'        => 'Liên hệ',
                'slug'        => \Illuminate\Support\Str::slug('Liên hệ', '-'),
                'status'      => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
