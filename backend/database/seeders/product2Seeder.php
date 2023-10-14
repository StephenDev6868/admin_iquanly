<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('products')->insert([
            [
                'name' => 'AR01',
                'code' => 'Mẫu Áo Bảo Hộ Cơ Bản',
                'creator_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        $result2= DB::table('product_steps')->insert([
            [
                'name' => 'MAY PHẢN QUANG THÂN PHẢI HOÀN CHỈNH *2',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ SÓNG MŨ ÁO PHẢN QUANG',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'MAY PHẢN QUANG THÂN TRÁI HOÀN CHỈNH *2',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ NÁCH ÁO PHẢN QUANG',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ TRA MŨ VÀO THÂN+NHÃN',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ VAI TAY ÁO PHẢN QUANG',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'MAY PHẢN QUANG THÂN SAU HOÀN CHỈNH*3',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'TRA DÂY KÉO HOÀN CHỈNH+KHOÁ NẸP NGANG',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'NỐI BỤNG TRƯỚC',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ THUN CHÂN ÁO PHẢN QUANG',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ NẸP VÀO THÂN',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ THUN MŨ ÁO PHẢN QUANG',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ THUN TAY ÁO PHẢN QUANG',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ BỤNG(ĐÁY) SAU+GIÀNG TRONG+BỤNG(ĐÁY) TRƯỚC',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'LƯỢT NẸP CHE',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ EO + VẮT SỔ DÂY PHẢN QUANG TRƯỚC',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'MÍ PHẢN QUANG VÀO NẸP',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'TRA DÂY KÉO HOÀN CHỈNH+KHOÁ NẸP NGANG+NỐI BỤNG TRƯ',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'CHẦN 5 LY NẸP CHE',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'GẤP TP',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'LỘN TP',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'GẤP+LỘN TP',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ THÂN SAU',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ TAY VÀO THÂN (VẮT SỔ TRA TAY)',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ VAI TAY (VẮT SỔ SƯỜN)',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ SÓNG MŨ',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ THUN MŨ',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ MŨ VÀO THÂN + NHÃN',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ GIÀNG TRONG',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ TẤT',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'TRA TẤT VÀO THÂN',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'TRA DÂY KÉO HOÀN CHỈNH',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ THUN TAY',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'MAY 1 ĐOẠN THÂN TRƯỚC',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
            [
                'name' => 'VẮT SỔ SÓNG THÂN SAU + MỘT ĐOẠN THÂN TRƯỚC',
                'product_id' => 1,
                'coefficient' => 0,
                'unit_price' => 590,
            ],
        ]);
    }
}
